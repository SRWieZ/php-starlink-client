<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiGetClientHistoryRequest</code>
 */
class WifiGetClientHistoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string mac_address = 1 [json_name = "macAddress"];</code>
     */
    protected $mac_address = null;

    /**
     * Generated from protobuf field <code>optional uint32 client_id = 2 [json_name = "clientId"];</code>
     */
    protected $client_id = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $mac_address
     * @type int $client_id
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Wifi::initOnce();
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
     * Generated from protobuf field <code>optional uint32 client_id = 2 [json_name = "clientId"];</code>
     *
     * @return int
     */
    public function getClientId()
    {
        return isset($this->client_id) ? $this->client_id : 0;
    }

    public function hasClientId()
    {
        return isset($this->client_id);
    }

    public function clearClientId()
    {
        unset($this->client_id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 client_id = 2 [json_name = "clientId"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkUint32($var);
        $this->client_id = $var;

        return $this;
    }
}
