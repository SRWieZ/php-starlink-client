<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi_util.proto

namespace SpaceX\API\Device\RadiusStatsMap;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.RadiusStatsMap.RadiusStatsEntry</code>
 */
class RadiusStatsEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string key = 1 [json_name = "key"];</code>
     */
    protected $key = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.RadiusStatsMap.RadiusStats value = 2 [json_name = "value"];</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $key
     * @type \SpaceX\API\Device\RadiusStatsMap\RadiusStats $value
     *                                                     }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\WifiUtil::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string key = 1 [json_name = "key"];</code>
     *
     * @return string
     */
    public function getKey()
    {
        return isset($this->key) ? $this->key : '';
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * Generated from protobuf field <code>optional string key = 1 [json_name = "key"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.RadiusStatsMap.RadiusStats value = 2 [json_name = "value"];</code>
     *
     * @return \SpaceX\API\Device\RadiusStatsMap\RadiusStats|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.RadiusStatsMap.RadiusStats value = 2 [json_name = "value"];</code>
     *
     * @param  \SpaceX\API\Device\RadiusStatsMap\RadiusStats  $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\RadiusStatsMap\RadiusStats::class);
        $this->value = $var;

        return $this;
    }
}
