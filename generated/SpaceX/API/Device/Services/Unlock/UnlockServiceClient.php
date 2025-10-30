<?php

// GENERATED CODE -- DO NOT EDIT!

namespace SpaceX\API\Device\Services\Unlock;

class UnlockServiceClient extends \Grpc\BaseStub
{
    /**
     * @param  string  $hostname  hostname
     * @param  array  $opts  channel options
     * @param  \Grpc\Channel  $channel  (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param  \SpaceX\API\Device\Services\Unlock\StartUnlockRequest  $argument  input argument
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return \Grpc\UnaryCall<\SpaceX\API\Device\Services\Unlock\StartUnlockResponse>
     */
    public function StartUnlock(\SpaceX\API\Device\Services\Unlock\StartUnlockRequest $argument,
        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/SpaceX.API.Device.Services.Unlock.UnlockService/StartUnlock',
            $argument,
            ['\SpaceX\API\Device\Services\Unlock\StartUnlockResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param  \SpaceX\API\Device\Services\Unlock\FinishUnlockRequest  $argument  input argument
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return \Grpc\UnaryCall<\SpaceX\API\Device\Services\Unlock\FinishUnlockResponse>
     */
    public function FinishUnlock(\SpaceX\API\Device\Services\Unlock\FinishUnlockRequest $argument,
        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/SpaceX.API.Device.Services.Unlock.UnlockService/FinishUnlock',
            $argument,
            ['\SpaceX\API\Device\Services\Unlock\FinishUnlockResponse', 'decode'],
            $metadata, $options);
    }
}
