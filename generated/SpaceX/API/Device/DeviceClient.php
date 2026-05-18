<?php

// GENERATED CODE -- DO NOT EDIT!

namespace SpaceX\API\Device;

use Grpc\BaseStub;
use Grpc\BidiStreamingCall;
use Grpc\Channel;
use Grpc\UnaryCall;

class DeviceClient extends BaseStub
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
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return BidiStreamingCall
     */
    public function Stream($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/SpaceX.API.Device.Device/Stream',
            ['\SpaceX\API\Device\FromDevice', 'decode'],
            $metadata, $options);
    }

    /**
     * @param  Request  $argument  input argument
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return UnaryCall<Response>
     */
    public function Handle(Request $argument,
        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/SpaceX.API.Device.Device/Handle',
            $argument,
            ['\SpaceX\API\Device\Response', 'decode'],
            $metadata, $options);
    }
}
