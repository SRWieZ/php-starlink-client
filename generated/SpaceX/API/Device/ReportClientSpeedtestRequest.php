<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.ReportClientSpeedtestRequest</code>
 */
class ReportClientSpeedtestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint32 id = 1 [json_name = "id"];</code>
     */
    protected $id = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SpeedTestStats client_speedtest = 2 [json_name = "clientSpeedtest"];</code>
     */
    protected $client_speedtest = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SpeedTestStats wifi_speedtest = 5 [json_name = "wifiSpeedtest"];</code>
     */
    protected $wifi_speedtest = null;

    /**
     * Generated from protobuf field <code>optional float client_rssi = 3 [json_name = "clientRssi"];</code>
     */
    protected $client_rssi = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.ClientPlatform client_platform = 4 [json_name = "clientPlatform"];</code>
     */
    protected $client_platform = null;

    /**
     * Generated from protobuf field <code>optional string app_version = 6 [json_name = "appVersion"];</code>
     */
    protected $app_version = null;

    /**
     * Generated from protobuf field <code>optional uint32 app_build = 7 [json_name = "appBuild"];</code>
     */
    protected $app_build = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $id
     * @type \SpaceX\API\Device\SpeedTestStats $client_speedtest
     * @type \SpaceX\API\Device\SpeedTestStats $wifi_speedtest
     * @type float $client_rssi
     * @type \SpaceX\API\Device\ClientPlatform $client_platform
     * @type string $app_version
     * @type int $app_build
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint32 id = 1 [json_name = "id"];</code>
     *
     * @return int
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 id = 1 [json_name = "id"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SpeedTestStats client_speedtest = 2 [json_name = "clientSpeedtest"];</code>
     *
     * @return \SpaceX\API\Device\SpeedTestStats|null
     */
    public function getClientSpeedtest()
    {
        return $this->client_speedtest;
    }

    public function hasClientSpeedtest()
    {
        return isset($this->client_speedtest);
    }

    public function clearClientSpeedtest()
    {
        unset($this->client_speedtest);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SpeedTestStats client_speedtest = 2 [json_name = "clientSpeedtest"];</code>
     *
     * @param  \SpaceX\API\Device\SpeedTestStats  $var
     * @return $this
     */
    public function setClientSpeedtest($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\SpeedTestStats::class);
        $this->client_speedtest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SpeedTestStats wifi_speedtest = 5 [json_name = "wifiSpeedtest"];</code>
     *
     * @return \SpaceX\API\Device\SpeedTestStats|null
     */
    public function getWifiSpeedtest()
    {
        return $this->wifi_speedtest;
    }

    public function hasWifiSpeedtest()
    {
        return isset($this->wifi_speedtest);
    }

    public function clearWifiSpeedtest()
    {
        unset($this->wifi_speedtest);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SpeedTestStats wifi_speedtest = 5 [json_name = "wifiSpeedtest"];</code>
     *
     * @param  \SpaceX\API\Device\SpeedTestStats  $var
     * @return $this
     */
    public function setWifiSpeedtest($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\SpeedTestStats::class);
        $this->wifi_speedtest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float client_rssi = 3 [json_name = "clientRssi"];</code>
     *
     * @return float
     */
    public function getClientRssi()
    {
        return isset($this->client_rssi) ? $this->client_rssi : 0.0;
    }

    public function hasClientRssi()
    {
        return isset($this->client_rssi);
    }

    public function clearClientRssi()
    {
        unset($this->client_rssi);
    }

    /**
     * Generated from protobuf field <code>optional float client_rssi = 3 [json_name = "clientRssi"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setClientRssi($var)
    {
        GPBUtil::checkFloat($var);
        $this->client_rssi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.ClientPlatform client_platform = 4 [json_name = "clientPlatform"];</code>
     *
     * @return \SpaceX\API\Device\ClientPlatform|null
     */
    public function getClientPlatform()
    {
        return $this->client_platform;
    }

    public function hasClientPlatform()
    {
        return isset($this->client_platform);
    }

    public function clearClientPlatform()
    {
        unset($this->client_platform);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.ClientPlatform client_platform = 4 [json_name = "clientPlatform"];</code>
     *
     * @param  \SpaceX\API\Device\ClientPlatform  $var
     * @return $this
     */
    public function setClientPlatform($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\ClientPlatform::class);
        $this->client_platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string app_version = 6 [json_name = "appVersion"];</code>
     *
     * @return string
     */
    public function getAppVersion()
    {
        return isset($this->app_version) ? $this->app_version : '';
    }

    public function hasAppVersion()
    {
        return isset($this->app_version);
    }

    public function clearAppVersion()
    {
        unset($this->app_version);
    }

    /**
     * Generated from protobuf field <code>optional string app_version = 6 [json_name = "appVersion"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setAppVersion($var)
    {
        GPBUtil::checkString($var, true);
        $this->app_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 app_build = 7 [json_name = "appBuild"];</code>
     *
     * @return int
     */
    public function getAppBuild()
    {
        return isset($this->app_build) ? $this->app_build : 0;
    }

    public function hasAppBuild()
    {
        return isset($this->app_build);
    }

    public function clearAppBuild()
    {
        unset($this->app_build);
    }

    /**
     * Generated from protobuf field <code>optional uint32 app_build = 7 [json_name = "appBuild"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setAppBuild($var)
    {
        GPBUtil::checkUint32($var);
        $this->app_build = $var;

        return $this;
    }
}
