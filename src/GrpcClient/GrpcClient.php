<?php

namespace SRWieZ\StarlinkClient\GrpcClient;

use const Grpc\STATUS_OK;
use const Grpc\STATUS_PERMISSION_DENIED;

use Google\Protobuf\Internal\Message;
use Grpc\ChannelCredentials;
use SpaceX\API\Device\DeviceClient;
use SpaceX\API\Device\Request;
use SpaceX\API\Device\Response;
use SRWieZ\StarlinkClient\Exceptions\GrpcCallFailedException;
use SRWieZ\StarlinkClient\Exceptions\PermissionDeniedException;

class GrpcClient
{
    protected DeviceClient $client;

    protected static int $historyBufferSize = 900;

    public function __construct(
        public string $host,
        public float $timeout = 1.0,
    ) {
        // Create a generic stub
        $this->client = new DeviceClient($this->host, [
            'credentials' => ChannelCredentials::createInsecure(),
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
     * @throws PermissionDeniedException
     */
    public function handle(Message $request, ?int $timeout = null): Response
    {
        $options = [
            'timeout' => intval(($timeout ?? $this->timeout) * 1000 * 1000), // Convert seconds to microseconds
        ];

        /** @var Response $response */
        /** @var object{code: int, details: string, metadata:array} $status */
        [$response, $status] = $this->client->Handle(
            argument: new Request([
                self::getRequestKey($request) => $request,
            ]),
            options: $options
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

        $return = (array) json_decode(
            json: $response->serializeToJsonString(),
            associative: true,
        );

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Failed to decode JSON response: '.json_last_error_msg());
        }

        return $return;
    }

    public function disconnect(): void
    {
        $this->client->close();
    }

    public function __destruct()
    {
        $this->disconnect();
    }
}
