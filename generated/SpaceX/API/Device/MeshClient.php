<?php

// GENERATED CODE -- DO NOT EDIT!

namespace SpaceX\API\Device;

use Grpc\BaseStub;
use Grpc\BidiStreamingCall;
use Grpc\Channel;

class MeshClient extends BaseStub
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
    public function MeshStream($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/SpaceX.API.Device.Mesh/MeshStream',
            ['\SpaceX\API\Device\FromController', 'decode'],
            $metadata, $options);
    }
}
