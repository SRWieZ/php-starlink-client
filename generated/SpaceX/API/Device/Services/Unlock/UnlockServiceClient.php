<?php

// GENERATED CODE -- DO NOT EDIT!

namespace SpaceX\API\Device\Services\Unlock;

use Grpc\BaseStub;
use Grpc\Channel;
use Grpc\UnaryCall;

class UnlockServiceClient extends BaseStub
{
    /**
     * @param  string  $hostname  hostname
     * @param  array  $opts  channel options
     * @param  Channel  $channel  (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param  StartUnlockRequest  $argument  input argument
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return UnaryCall<StartUnlockResponse>
     */
    public function StartUnlock(StartUnlockRequest $argument,
        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/SpaceX.API.Device.Services.Unlock.UnlockService/StartUnlock',
            $argument,
            ['\SpaceX\API\Device\Services\Unlock\StartUnlockResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param  FinishUnlockRequest  $argument  input argument
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return UnaryCall<FinishUnlockResponse>
     */
    public function FinishUnlock(FinishUnlockRequest $argument,
        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/SpaceX.API.Device.Services.Unlock.UnlockService/FinishUnlock',
            $argument,
            ['\SpaceX\API\Device\Services\Unlock\FinishUnlockResponse', 'decode'],
            $metadata, $options);
    }
}
