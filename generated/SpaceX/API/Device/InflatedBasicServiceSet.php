<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi_util.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.InflatedBasicServiceSet</code>
 */
class InflatedBasicServiceSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string bssid = 1 [json_name = "bssid"];</code>
     */
    protected $bssid = null;

    /**
     * Generated from protobuf field <code>optional string ssid = 2 [json_name = "ssid"];</code>
     */
    protected $ssid = null;

    /**
     * Generated from protobuf field <code>optional string mac_lan = 3 [json_name = "macLan"];</code>
     */
    protected $mac_lan = null;

    /**
     * Generated from protobuf field <code>optional string iface_name = 4 [json_name = "ifaceName"];</code>
     */
    protected $iface_name = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.IfaceType iface_type = 5 [json_name = "ifaceType"];</code>
     */
    protected $iface_type = null;

    /**
     * Generated from protobuf field <code>optional uint32 channel = 6 [json_name = "channel"];</code>
     */
    protected $channel = null;

    /**
     * Generated from protobuf field <code>optional uint32 preference = 7 [json_name = "preference"];</code>
     */
    protected $preference = null;

    /**
     * Generated from protobuf field <code>optional string domain = 8 [json_name = "domain"];</code>
     */
    protected $domain = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $bssid
     * @type string $ssid
     * @type string $mac_lan
     * @type string $iface_name
     * @type int $iface_type
     * @type int $channel
     * @type int $preference
     * @type string $domain
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\WifiUtil::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string bssid = 1 [json_name = "bssid"];</code>
     *
     * @return string
     */
    public function getBssid()
    {
        return isset($this->bssid) ? $this->bssid : '';
    }

    public function hasBssid()
    {
        return isset($this->bssid);
    }

    public function clearBssid()
    {
        unset($this->bssid);
    }

    /**
     * Generated from protobuf field <code>optional string bssid = 1 [json_name = "bssid"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setBssid($var)
    {
        GPBUtil::checkString($var, true);
        $this->bssid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ssid = 2 [json_name = "ssid"];</code>
     *
     * @return string
     */
    public function getSsid()
    {
        return isset($this->ssid) ? $this->ssid : '';
    }

    public function hasSsid()
    {
        return isset($this->ssid);
    }

    public function clearSsid()
    {
        unset($this->ssid);
    }

    /**
     * Generated from protobuf field <code>optional string ssid = 2 [json_name = "ssid"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setSsid($var)
    {
        GPBUtil::checkString($var, true);
        $this->ssid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string mac_lan = 3 [json_name = "macLan"];</code>
     *
     * @return string
     */
    public function getMacLan()
    {
        return isset($this->mac_lan) ? $this->mac_lan : '';
    }

    public function hasMacLan()
    {
        return isset($this->mac_lan);
    }

    public function clearMacLan()
    {
        unset($this->mac_lan);
    }

    /**
     * Generated from protobuf field <code>optional string mac_lan = 3 [json_name = "macLan"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setMacLan($var)
    {
        GPBUtil::checkString($var, true);
        $this->mac_lan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string iface_name = 4 [json_name = "ifaceName"];</code>
     *
     * @return string
     */
    public function getIfaceName()
    {
        return isset($this->iface_name) ? $this->iface_name : '';
    }

    public function hasIfaceName()
    {
        return isset($this->iface_name);
    }

    public function clearIfaceName()
    {
        unset($this->iface_name);
    }

    /**
     * Generated from protobuf field <code>optional string iface_name = 4 [json_name = "ifaceName"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setIfaceName($var)
    {
        GPBUtil::checkString($var, true);
        $this->iface_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.IfaceType iface_type = 5 [json_name = "ifaceType"];</code>
     *
     * @return int
     */
    public function getIfaceType()
    {
        return isset($this->iface_type) ? $this->iface_type : 0;
    }

    public function hasIfaceType()
    {
        return isset($this->iface_type);
    }

    public function clearIfaceType()
    {
        unset($this->iface_type);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.IfaceType iface_type = 5 [json_name = "ifaceType"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setIfaceType($var)
    {
        GPBUtil::checkEnum($var, \SpaceX\API\Device\IfaceType::class);
        $this->iface_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 channel = 6 [json_name = "channel"];</code>
     *
     * @return int
     */
    public function getChannel()
    {
        return isset($this->channel) ? $this->channel : 0;
    }

    public function hasChannel()
    {
        return isset($this->channel);
    }

    public function clearChannel()
    {
        unset($this->channel);
    }

    /**
     * Generated from protobuf field <code>optional uint32 channel = 6 [json_name = "channel"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkUint32($var);
        $this->channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 preference = 7 [json_name = "preference"];</code>
     *
     * @return int
     */
    public function getPreference()
    {
        return isset($this->preference) ? $this->preference : 0;
    }

    public function hasPreference()
    {
        return isset($this->preference);
    }

    public function clearPreference()
    {
        unset($this->preference);
    }

    /**
     * Generated from protobuf field <code>optional uint32 preference = 7 [json_name = "preference"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setPreference($var)
    {
        GPBUtil::checkUint32($var);
        $this->preference = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string domain = 8 [json_name = "domain"];</code>
     *
     * @return string
     */
    public function getDomain()
    {
        return isset($this->domain) ? $this->domain : '';
    }

    public function hasDomain()
    {
        return isset($this->domain);
    }

    public function clearDomain()
    {
        unset($this->domain);
    }

    /**
     * Generated from protobuf field <code>optional string domain = 8 [json_name = "domain"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, true);
        $this->domain = $var;

        return $this;
    }
}
