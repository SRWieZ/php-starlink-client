<?php

// GENERATED CODE -- DO NOT EDIT!

namespace SpaceX\API\Device;

class DeviceClient extends \Grpc\BaseStub
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
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return \Grpc\BidiStreamingCall
     */
    public function Stream($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/SpaceX.API.Device.Device/Stream',
            ['\SpaceX\API\Device\FromDevice', 'decode'],
            $metadata, $options);
    }

    /**
     * @param  \SpaceX\API\Device\Request  $argument  input argument
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return \Grpc\UnaryCall<\SpaceX\API\Device\Response>
     */
    public function Handle(\SpaceX\API\Device\Request $argument,
        $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/SpaceX.API.Device.Device/Handle',
            $argument,
            ['\SpaceX\API\Device\Response', 'decode'],
            $metadata, $options);
    }
}
