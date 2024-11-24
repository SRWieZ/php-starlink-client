<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiNewClientConnectedEvent wifi_new_client_connected = 3001 [json_name = "wifiNewClientConnected"];</code>
     */
    protected $wifi_new_client_connected = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiAccountBondingEvent wifi_account_bonding = 3002 [json_name = "wifiAccountBonding"];</code>
     */
    protected $wifi_account_bonding = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiNewPeerEvent wifi_new_peer = 3003 [json_name = "wifiNewPeer"];</code>
     */
    protected $wifi_new_peer = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiCloudStatusEvent wifi_cloud_status = 3004 [json_name = "wifiCloudStatus"];</code>
     */
    protected $wifi_cloud_status = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiClientSandboxRequest wifi_client_sandbox = 3005 [json_name = "wifiClientSandbox"];</code>
     */
    protected $wifi_client_sandbox = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \SpaceX\API\Device\WifiNewClientConnectedEvent $wifi_new_client_connected
     * @type \SpaceX\API\Device\WifiAccountBondingEvent $wifi_account_bonding
     * @type \SpaceX\API\Device\WifiNewPeerEvent $wifi_new_peer
     * @type \SpaceX\API\Device\WifiCloudStatusEvent $wifi_cloud_status
     * @type \SpaceX\API\Device\WifiClientSandboxRequest $wifi_client_sandbox
     *                                                   }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiNewClientConnectedEvent wifi_new_client_connected = 3001 [json_name = "wifiNewClientConnected"];</code>
     *
     * @return \SpaceX\API\Device\WifiNewClientConnectedEvent|null
     */
    public function getWifiNewClientConnected()
    {
        return $this->wifi_new_client_connected;
    }

    public function hasWifiNewClientConnected()
    {
        return isset($this->wifi_new_client_connected);
    }

    public function clearWifiNewClientConnected()
    {
        unset($this->wifi_new_client_connected);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiNewClientConnectedEvent wifi_new_client_connected = 3001 [json_name = "wifiNewClientConnected"];</code>
     *
     * @param  \SpaceX\API\Device\WifiNewClientConnectedEvent  $var
     * @return $this
     */
    public function setWifiNewClientConnected($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiNewClientConnectedEvent::class);
        $this->wifi_new_client_connected = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiAccountBondingEvent wifi_account_bonding = 3002 [json_name = "wifiAccountBonding"];</code>
     *
     * @return \SpaceX\API\Device\WifiAccountBondingEvent|null
     */
    public function getWifiAccountBonding()
    {
        return $this->wifi_account_bonding;
    }

    public function hasWifiAccountBonding()
    {
        return isset($this->wifi_account_bonding);
    }

    public function clearWifiAccountBonding()
    {
        unset($this->wifi_account_bonding);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiAccountBondingEvent wifi_account_bonding = 3002 [json_name = "wifiAccountBonding"];</code>
     *
     * @param  \SpaceX\API\Device\WifiAccountBondingEvent  $var
     * @return $this
     */
    public function setWifiAccountBonding($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiAccountBondingEvent::class);
        $this->wifi_account_bonding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiNewPeerEvent wifi_new_peer = 3003 [json_name = "wifiNewPeer"];</code>
     *
     * @return \SpaceX\API\Device\WifiNewPeerEvent|null
     */
    public function getWifiNewPeer()
    {
        return $this->wifi_new_peer;
    }

    public function hasWifiNewPeer()
    {
        return isset($this->wifi_new_peer);
    }

    public function clearWifiNewPeer()
    {
        unset($this->wifi_new_peer);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiNewPeerEvent wifi_new_peer = 3003 [json_name = "wifiNewPeer"];</code>
     *
     * @param  \SpaceX\API\Device\WifiNewPeerEvent  $var
     * @return $this
     */
    public function setWifiNewPeer($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiNewPeerEvent::class);
        $this->wifi_new_peer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiCloudStatusEvent wifi_cloud_status = 3004 [json_name = "wifiCloudStatus"];</code>
     *
     * @return \SpaceX\API\Device\WifiCloudStatusEvent|null
     */
    public function getWifiCloudStatus()
    {
        return $this->wifi_cloud_status;
    }

    public function hasWifiCloudStatus()
    {
        return isset($this->wifi_cloud_status);
    }

    public function clearWifiCloudStatus()
    {
        unset($this->wifi_cloud_status);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiCloudStatusEvent wifi_cloud_status = 3004 [json_name = "wifiCloudStatus"];</code>
     *
     * @param  \SpaceX\API\Device\WifiCloudStatusEvent  $var
     * @return $this
     */
    public function setWifiCloudStatus($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiCloudStatusEvent::class);
        $this->wifi_cloud_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiClientSandboxRequest wifi_client_sandbox = 3005 [json_name = "wifiClientSandbox"];</code>
     *
     * @return \SpaceX\API\Device\WifiClientSandboxRequest|null
     */
    public function getWifiClientSandbox()
    {
        return $this->wifi_client_sandbox;
    }

    public function hasWifiClientSandbox()
    {
        return isset($this->wifi_client_sandbox);
    }

    public function clearWifiClientSandbox()
    {
        unset($this->wifi_client_sandbox);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiClientSandboxRequest wifi_client_sandbox = 3005 [json_name = "wifiClientSandbox"];</code>
     *
     * @param  \SpaceX\API\Device\WifiClientSandboxRequest  $var
     * @return $this
     */
    public function setWifiClientSandbox($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiClientSandboxRequest::class);
        $this->wifi_client_sandbox = $var;

        return $this;
    }
}
