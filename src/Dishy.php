<?php

namespace SRWieZ\StarlinkClient;

use SpaceX\API\Device\DishClearObstructionMapRequest;
use SpaceX\API\Device\DishConfig;
use SpaceX\API\Device\DishGetObstructionMapRequest;
use SpaceX\API\Device\DishPowerSaveRequest;
use SpaceX\API\Device\DishStowRequest;
use SpaceX\API\Device\GetHistoryRequest;
use SpaceX\API\Device\GetLocationRequest;
use SpaceX\API\Device\GetStatusRequest;
use SpaceX\API\Device\PositionSource;
use SRWieZ\StarlinkClient\Exceptions\GrpcCallFailedException;
use SRWieZ\StarlinkClient\Exceptions\PermissionDeniedException;
use SRWieZ\StarlinkClient\GrpcClient\GrpcClient;
use SRWieZ\StarlinkClient\Traits\CanReboot;
use SRWieZ\StarlinkClient\Traits\HasHistoryData;

class Dishy extends GrpcClient
{
    use CanReboot;
    use HasHistoryData;

    public function __construct(
        string $host = '192.168.100.1:9200',
        float $timeout = 1.0
    ) {
        parent::__construct($host, $timeout);
    }

    public function getStatus(): array
    {
        return self::responseToArray(
            $this->handle(new GetStatusRequest)->getDishGetStatus()
        );
    }

    private function snakeToCamel(string $string): string
    {
        $parts = explode('_', strtolower($string));
        $parts = array_map('mb_ucfirst', $parts);

        return mb_lcfirst(implode('', $parts));
    }

    public function getAlerts(): array
    {
        $alerts = $this->handle(new GetStatusRequest)->getDishGetStatus()->getAlerts();

        $defaults = array_map(function (string $key) {
            return [self::snakeToCamel(substr($key, 1)) => false];
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
        $array = self::responseToArray(
            $this->handle(
                request: new GetHistoryRequest,
                // timeout: max($this->timeout, 10)
            )->getDishGetHistory()
        );

        $current = (int) ($array['current'] ?? 0);

        // History data is stored in a circular buffer, reorder it to be chronological
        foreach ($array as $key => $value) {
            if (is_array($value) && count($value) == self::$historyBufferSize) {
                $array[$key] = self::reorderHistoryData($value, $current);
            }
        }

        return $array;
    }

    // Can take a few seconds
    public function unstow(): void
    {
        $this->stow(false);
    }

    public function stow(bool $stow = true): void
    {
        $request = new DishStowRequest;

        if ($stow === false) {
            $request->setUnstow(true);
        }

        $this->handle($request, timeout: 5);
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
     *
     * @throws GrpcCallFailedException
     * @throws PermissionDeniedException
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
}
