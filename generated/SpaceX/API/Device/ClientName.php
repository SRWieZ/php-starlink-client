<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi_config.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.ClientName</code>
 */
class ClientName extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string mac_address = 1 [json_name = "macAddress"];</code>
     */
    protected $mac_address = null;

    /**
     * Generated from protobuf field <code>optional string given_name = 2 [json_name = "givenName"];</code>
     */
    protected $given_name = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $mac_address
     * @type string $given_name
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\WifiConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string mac_address = 1 [json_name = "macAddress"];</code>
     *
     * @return string
     */
    public function getMacAddress()
    {
        return isset($this->mac_address) ? $this->mac_address : '';
    }

    public function hasMacAddress()
    {
        return isset($this->mac_address);
    }

    public function clearMacAddress()
    {
        unset($this->mac_address);
    }

    /**
     * Generated from protobuf field <code>optional string mac_address = 1 [json_name = "macAddress"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setMacAddress($var)
    {
        GPBUtil::checkString($var, true);
        $this->mac_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string given_name = 2 [json_name = "givenName"];</code>
     *
     * @return string
     */
    public function getGivenName()
    {
        return isset($this->given_name) ? $this->given_name : '';
    }

    public function hasGivenName()
    {
        return isset($this->given_name);
    }

    public function clearGivenName()
    {
        unset($this->given_name);
    }

    /**
     * Generated from protobuf field <code>optional string given_name = 2 [json_name = "givenName"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setGivenName($var)
    {
        GPBUtil::checkString($var, true);
        $this->given_name = $var;

        return $this;
    }
}
