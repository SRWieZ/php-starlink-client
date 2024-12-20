<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiClientSandboxRequest</code>
 */
class WifiClientSandboxRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClientSandboxStatus client_sandbox_status = 1 [json_name = "clientSandboxStatus"];</code>
     */
    private $client_sandbox_status;

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClientSandboxAlert alerts = 2 [json_name = "alerts"];</code>
     */
    private $alerts;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\SpaceX\API\Device\WifiClientSandboxStatus>|\Google\Protobuf\Internal\RepeatedField $client_sandbox_status
     * @type array<int>|\Google\Protobuf\Internal\RepeatedField $alerts
     *                                                          }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClientSandboxStatus client_sandbox_status = 1 [json_name = "clientSandboxStatus"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientSandboxStatus()
    {
        return $this->client_sandbox_status;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClientSandboxStatus client_sandbox_status = 1 [json_name = "clientSandboxStatus"];</code>
     *
     * @param  array<\SpaceX\API\Device\WifiClientSandboxStatus>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setClientSandboxStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\WifiClientSandboxStatus::class);
        $this->client_sandbox_status = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClientSandboxAlert alerts = 2 [json_name = "alerts"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClientSandboxAlert alerts = 2 [json_name = "alerts"];</code>
     *
     * @param  array<int>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setAlerts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \SpaceX\API\Device\WifiClientSandboxAlert::class);
        $this->alerts = $arr;

        return $this;
    }
}
