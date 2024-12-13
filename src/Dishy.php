<?php

namespace SRWieZ\StarlinkClient;

use const Grpc\STATUS_OK;
use const Grpc\STATUS_PERMISSION_DENIED;

use Google\Protobuf\Internal\Message;
use Grpc\ChannelCredentials;
use SpaceX\API\Device\DeviceClient;
use SpaceX\API\Device\DishClearObstructionMapRequest;
use SpaceX\API\Device\DishConfig;
use SpaceX\API\Device\DishGetObstructionMapRequest;
use SpaceX\API\Device\DishPowerSaveRequest;
use SpaceX\API\Device\DishStowRequest;
use SpaceX\API\Device\GetHistoryRequest;
use SpaceX\API\Device\GetLocationRequest;
use SpaceX\API\Device\GetStatusRequest;
use SpaceX\API\Device\PositionSource;
use SpaceX\API\Device\RebootRequest;
use SpaceX\API\Device\Request;
use SpaceX\API\Device\Response;
use SRWieZ\StarlinkClient\Exceptions\GrpcCallFailedException;
use SRWieZ\StarlinkClient\Exceptions\PermissionDeniedException;

class Dishy
{
    private DeviceClient $client;

    public function __construct(
        public string $host = '192.168.100.1:9200',
        public int $timeout = 1,
    ) {
        // Create a generic stub
        $this->client = new DeviceClient($this->host, [
            'credentials' => ChannelCredentials::createInsecure(),
            'timeout' => $this->timeout,
        ]);
    }

    /** @noinspection PhpUnnecessaryLocalVariableInspection */
    public static function getRequestKey(Message $request): string
    {
        // SpaceX\API\Device\GetStatusRequest
        $key = get_class($request);
        // SpaceX/API/Device/GetStatusRequest
        $key = str_replace('\\', DIRECTORY_SEPARATOR, $key);
        // GetStatusRequest
        $key = basename($key);
        // GetStatus
        $key = substr_replace($key, '', strpos($key, 'Request') ?: 0, strlen('Request'));
        // get_status
        $key = mb_strtolower((string) preg_replace('/(.)(?=[A-Z])/u', '$1_', $key));

        return $key;
    }

    /**
     * @throws GrpcCallFailedException
     */
    public function handle(Message $request): Response
    {
        /** @var Response $response */
        /** @var object{code: int, details: string, metadata:array} $status */
        [$response, $status] = $this->client->Handle(
            argument: new Request([
                self::getRequestKey($request) => new $request,
            ])
        )->wait();

        if ($status->code === STATUS_PERMISSION_DENIED) {
            throw new PermissionDeniedException;
        }
        if ($status->code !== STATUS_OK) {
            throw new GrpcCallFailedException($status->details);
        }

        return $response;
    }

    public static function responseToArray(?Message $response): array
    {
        if ($response === null) {
            return [];
        }

        return (array) json_decode(
            json: $response->serializeToJsonString(),
            associative: true,
        );
    }

    public function getStatus(): array
    {
        return self::responseToArray(
            $this->handle(new GetStatusRequest)->getDishGetStatus()
        );
    }

    public function getAlerts(): array
    {
        $alerts = $this->handle(new GetStatusRequest)->getDishGetStatus()->getAlerts();

        $defaults = array_map(function ($key) {
            return [substr($key, 1) => false];
        }, array_keys(get_object_vars($alerts)));

        $defaults = array_merge(...$defaults);

        return array_merge($defaults, self::responseToArray($alerts));
    }

    public function getObstructionMap(): array
    {
        return self::responseToArray(
            $this->handle(new DishGetObstructionMapRequest)->getDishGetObstructionMap()
        );
    }

    public function getLocation(): array|bool
    {
        try {
            $result = $this->handle(new GetLocationRequest)->getGetLocation();

        } catch (PermissionDeniedException) {
            // This is expected when the user has not granted location permission in the app
            return false;
        }

        return [
            'latitude' => $result?->getLla()?->hasLat() ? $result->getLla()->getLat() : null,
            'longitude' => $result?->getLla()?->hasLon() ? $result->getLla()->getLon() : null,
            'altitude' => $result?->getLla()?->hasAlt() ? $result->getLla()->getAlt() : null,
            // ugly, why gRPC doesn't provide a true enum?
            'source' => $result?->hasSource() ? PositionSource::name($result->getSource()) : null,
        ];
    }

    public function getStatsHistory(): array
    {
        return self::responseToArray(
            $this->handle(new GetHistoryRequest)->getDishGetHistory()
        );
    }

    public function unstow(): void
    {
        $this->stow(false);
    }

    public function stow(bool $stow = true): void
    {
        $this->handle(new DishStowRequest(
            array_filter(['unstow' => ! $stow])
        ));
    }

    public function reboot(): void
    {
        $this->handle(new RebootRequest);
    }

    public function resetObstructionMap(): void
    {
        $this->handle(new DishClearObstructionMapRequest);
    }

    public function disableSleepMode(bool $keep_config = true): void
    {
        $config = $keep_config ? $this->getSleepModeConfig() : [];

        $this->setSleepModeConfig(
            start: $config['start'] ?? 0,
            duration: $config['duration'] ?? 1,
            enable: false,
        );
    }

    /**
     * @return array{start: int, duration: int, enable: bool}
     */
    public function getSleepModeConfig(): array
    {
        $config = $this->handle(new GetStatusRequest)
            ->getDishGetStatus()
            ?->getConfig() ?? new DishConfig;

        if ($config->getPowerSaveMode() === false) {
            return [
                'start' => 0,
                'duration' => 1,
                'enable' => false,
            ];
        }

        return [
            'start' => $config->getPowerSaveStartMinutes(),
            'duration' => $config->getPowerSaveDurationMinutes(),
            'enable' => true,
        ];
    }

    /**
     * @param  int  $start  In minutes after midnight
     * @param  int  $duration  In minutes
     */
    public function setSleepModeConfig(int $start = 0, int $duration = 1, bool $enable = true): void
    {
        if ($start < 0 || $start > 1440) {
            throw new \InvalidArgumentException('Start time must be between 0 and 1440');
        }

        if ($duration < 1 || $duration > 1440) {
            throw new \InvalidArgumentException('Duration must be between 1 and 1440');
        }

        if (! $enable) {
            $start = 0;
            $duration = 1; // duration of 0 not allowed, even when disabled
        }

        $request = new DishPowerSaveRequest([
            'power_save_start_minutes' => $start,
            'power_save_duration_minutes' => $duration,
            'enable_power_save' => $enable,
        ]);

        $this->handle($request);
    }

    public function __destruct()
    {
        $this->client->close();
    }
}
