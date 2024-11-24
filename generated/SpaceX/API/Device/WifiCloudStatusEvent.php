<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiCloudStatusEvent</code>
 */
class WifiCloudStatusEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint32 api_version = 4 [json_name = "apiVersion"];</code>
     */
    protected $api_version = null;

    /**
     * Generated from protobuf field <code>optional bool direct_link_to_dish = 1 [json_name = "directLinkToDish"];</code>
     */
    protected $direct_link_to_dish = null;

    /**
     * Generated from protobuf field <code>optional string hardware_version = 2 [json_name = "hardwareVersion"];</code>
     */
    protected $hardware_version = null;

    /**
     * Generated from protobuf field <code>optional bool is_bypassed = 3 [json_name = "isBypassed"];</code>
     */
    protected $is_bypassed = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $api_version
     * @type bool $direct_link_to_dish
     * @type string $hardware_version
     * @type bool $is_bypassed
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint32 api_version = 4 [json_name = "apiVersion"];</code>
     *
     * @return int
     */
    public function getApiVersion()
    {
        return isset($this->api_version) ? $this->api_version : 0;
    }

    public function hasApiVersion()
    {
        return isset($this->api_version);
    }

    public function clearApiVersion()
    {
        unset($this->api_version);
    }

    /**
     * Generated from protobuf field <code>optional uint32 api_version = 4 [json_name = "apiVersion"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->api_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool direct_link_to_dish = 1 [json_name = "directLinkToDish"];</code>
     *
     * @return bool
     */
    public function getDirectLinkToDish()
    {
        return isset($this->direct_link_to_dish) ? $this->direct_link_to_dish : false;
    }

    public function hasDirectLinkToDish()
    {
        return isset($this->direct_link_to_dish);
    }

    public function clearDirectLinkToDish()
    {
        unset($this->direct_link_to_dish);
    }

    /**
     * Generated from protobuf field <code>optional bool direct_link_to_dish = 1 [json_name = "directLinkToDish"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setDirectLinkToDish($var)
    {
        GPBUtil::checkBool($var);
        $this->direct_link_to_dish = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string hardware_version = 2 [json_name = "hardwareVersion"];</code>
     *
     * @return string
     */
    public function getHardwareVersion()
    {
        return isset($this->hardware_version) ? $this->hardware_version : '';
    }

    public function hasHardwareVersion()
    {
        return isset($this->hardware_version);
    }

    public function clearHardwareVersion()
    {
        unset($this->hardware_version);
    }

    /**
     * Generated from protobuf field <code>optional string hardware_version = 2 [json_name = "hardwareVersion"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setHardwareVersion($var)
    {
        GPBUtil::checkString($var, true);
        $this->hardware_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool is_bypassed = 3 [json_name = "isBypassed"];</code>
     *
     * @return bool
     */
    public function getIsBypassed()
    {
        return isset($this->is_bypassed) ? $this->is_bypassed : false;
    }

    public function hasIsBypassed()
    {
        return isset($this->is_bypassed);
    }

    public function clearIsBypassed()
    {
        unset($this->is_bypassed);
    }

    /**
     * Generated from protobuf field <code>optional bool is_bypassed = 3 [json_name = "isBypassed"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsBypassed($var)
    {
        GPBUtil::checkBool($var);
        $this->is_bypassed = $var;

        return $this;
    }
}
