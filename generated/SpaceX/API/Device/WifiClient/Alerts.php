<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi.proto

namespace SpaceX\API\Device\WifiClient;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiClient.Alerts</code>
 */
class Alerts extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool throughput_limited = 1 [json_name = "throughputLimited"];</code>
     */
    protected $throughput_limited = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type bool $throughput_limited
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool throughput_limited = 1 [json_name = "throughputLimited"];</code>
     *
     * @return bool
     */
    public function getThroughputLimited()
    {
        return isset($this->throughput_limited) ? $this->throughput_limited : false;
    }

    public function hasThroughputLimited()
    {
        return isset($this->throughput_limited);
    }

    public function clearThroughputLimited()
    {
        unset($this->throughput_limited);
    }

    /**
     * Generated from protobuf field <code>optional bool throughput_limited = 1 [json_name = "throughputLimited"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setThroughputLimited($var)
    {
        GPBUtil::checkBool($var);
        $this->throughput_limited = $var;

        return $this;
    }
}
