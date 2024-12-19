<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.PLCPortStats</code>
 */
class PLCPortStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint32 power = 1 [json_name = "power"];</code>
     */
    protected $power = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats.PortStatus status = 2 [json_name = "status"];</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $power
     * @type int $status
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Dish::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint32 power = 1 [json_name = "power"];</code>
     *
     * @return int
     */
    public function getPower()
    {
        return isset($this->power) ? $this->power : 0;
    }

    public function hasPower()
    {
        return isset($this->power);
    }

    public function clearPower()
    {
        unset($this->power);
    }

    /**
     * Generated from protobuf field <code>optional uint32 power = 1 [json_name = "power"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setPower($var)
    {
        GPBUtil::checkUint32($var);
        $this->power = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats.PortStatus status = 2 [json_name = "status"];</code>
     *
     * @return int
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : 0;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats.PortStatus status = 2 [json_name = "status"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \SpaceX\API\Device\PLCPortStats\PortStatus::class);
        $this->status = $var;

        return $this;
    }
}
