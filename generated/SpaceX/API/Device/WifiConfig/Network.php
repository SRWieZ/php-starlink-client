<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi_config.proto

namespace SpaceX\API\Device\WifiConfig;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiConfig.Network</code>
 */
class Network extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string ipv4 = 1003 [json_name = "ipv4"];</code>
     */
    protected $ipv4 = null;

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_start = 1012 [json_name = "dhcpv4Start"];</code>
     */
    protected $dhcpv4_start = null;

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_end = 1025 [json_name = "dhcpv4End"];</code>
     */
    protected $dhcpv4_end = null;

    /**
     * Generated from protobuf field <code>optional bool dhcp_disabled = 1015 [json_name = "dhcpDisabled"];</code>
     */
    protected $dhcp_disabled = null;

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_lease_duration_s = 1016 [json_name = "dhcpv4LeaseDurationS"];</code>
     */
    protected $dhcpv4_lease_duration_s = null;

    /**
     * Generated from protobuf field <code>optional string domain = 1011 [json_name = "domain"];</code>
     */
    protected $domain = null;

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiConfig.BasicServiceSet basic_service_sets = 1007 [json_name = "basicServiceSets"];</code>
     */
    private $basic_service_sets;

    /**
     * Generated from protobuf field <code>optional bool client_isolation = 1008 [json_name = "clientIsolation"];</code>
     */
    protected $client_isolation = null;

    /**
     * Generated from protobuf field <code>optional bool guest = 1009 [json_name = "guest"];</code>
     */
    protected $guest = null;

    /**
     * Generated from protobuf field <code>optional string landing = 1010 [json_name = "landing"];</code>
     */
    protected $landing = null;

    /**
     * Generated from protobuf field <code>optional bool landing_page_v2 = 1017 [json_name = "landingPageV2"];</code>
     */
    protected $landing_page_v2 = null;

    /**
     * Generated from protobuf field <code>optional bool sandbox_enabled = 1020 [json_name = "sandboxEnabled"];</code>
     */
    protected $sandbox_enabled = null;

    /**
     * Generated from protobuf field <code>repeated string sandbox_domain_allow_list = 1022 [json_name = "sandboxDomainAllowList"];</code>
     */
    private $sandbox_domain_allow_list;

    /**
     * Generated from protobuf field <code>optional uint32 sandbox_id = 1023 [json_name = "sandboxId"];</code>
     */
    protected $sandbox_id = null;

    /**
     * Generated from protobuf field <code>optional bool internal = 1013 [json_name = "internal"];</code>
     */
    protected $internal = null;

    /**
     * Generated from protobuf field <code>optional uint32 vlan = 1014 [json_name = "vlan"];</code>
     */
    protected $vlan = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.CaptivePortal captive_portal = 1024 [json_name = "captivePortal"];</code>
     */
    protected $captive_portal = null;

    /**
     * Generated from protobuf field <code>optional uint32 network_groups = 1026 [json_name = "networkGroups"];</code>
     */
    protected $network_groups = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $ipv4
     * @type int $dhcpv4_start
     * @type int $dhcpv4_end
     * @type bool $dhcp_disabled
     * @type int $dhcpv4_lease_duration_s
     * @type string $domain
     * @type array<\SpaceX\API\Device\WifiConfig\BasicServiceSet>|\Google\Protobuf\Internal\RepeatedField $basic_service_sets
     * @type bool $client_isolation
     * @type bool $guest
     * @type string $landing
     * @type bool $landing_page_v2
     * @type bool $sandbox_enabled
     * @type array<string>|\Google\Protobuf\Internal\RepeatedField $sandbox_domain_allow_list
     * @type int $sandbox_id
     * @type bool $internal
     * @type int $vlan
     * @type \SpaceX\API\Device\CaptivePortal $captive_portal
     * @type int $network_groups
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\WifiConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string ipv4 = 1003 [json_name = "ipv4"];</code>
     *
     * @return string
     */
    public function getIpv4()
    {
        return isset($this->ipv4) ? $this->ipv4 : '';
    }

    public function hasIpv4()
    {
        return isset($this->ipv4);
    }

    public function clearIpv4()
    {
        unset($this->ipv4);
    }

    /**
     * Generated from protobuf field <code>optional string ipv4 = 1003 [json_name = "ipv4"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setIpv4($var)
    {
        GPBUtil::checkString($var, true);
        $this->ipv4 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_start = 1012 [json_name = "dhcpv4Start"];</code>
     *
     * @return int
     */
    public function getDhcpv4Start()
    {
        return isset($this->dhcpv4_start) ? $this->dhcpv4_start : 0;
    }

    public function hasDhcpv4Start()
    {
        return isset($this->dhcpv4_start);
    }

    public function clearDhcpv4Start()
    {
        unset($this->dhcpv4_start);
    }

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_start = 1012 [json_name = "dhcpv4Start"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDhcpv4Start($var)
    {
        GPBUtil::checkUint32($var);
        $this->dhcpv4_start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_end = 1025 [json_name = "dhcpv4End"];</code>
     *
     * @return int
     */
    public function getDhcpv4End()
    {
        return isset($this->dhcpv4_end) ? $this->dhcpv4_end : 0;
    }

    public function hasDhcpv4End()
    {
        return isset($this->dhcpv4_end);
    }

    public function clearDhcpv4End()
    {
        unset($this->dhcpv4_end);
    }

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_end = 1025 [json_name = "dhcpv4End"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDhcpv4End($var)
    {
        GPBUtil::checkUint32($var);
        $this->dhcpv4_end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool dhcp_disabled = 1015 [json_name = "dhcpDisabled"];</code>
     *
     * @return bool
     */
    public function getDhcpDisabled()
    {
        return isset($this->dhcp_disabled) ? $this->dhcp_disabled : false;
    }

    public function hasDhcpDisabled()
    {
        return isset($this->dhcp_disabled);
    }

    public function clearDhcpDisabled()
    {
        unset($this->dhcp_disabled);
    }

    /**
     * Generated from protobuf field <code>optional bool dhcp_disabled = 1015 [json_name = "dhcpDisabled"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setDhcpDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->dhcp_disabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_lease_duration_s = 1016 [json_name = "dhcpv4LeaseDurationS"];</code>
     *
     * @return int
     */
    public function getDhcpv4LeaseDurationS()
    {
        return isset($this->dhcpv4_lease_duration_s) ? $this->dhcpv4_lease_duration_s : 0;
    }

    public function hasDhcpv4LeaseDurationS()
    {
        return isset($this->dhcpv4_lease_duration_s);
    }

    public function clearDhcpv4LeaseDurationS()
    {
        unset($this->dhcpv4_lease_duration_s);
    }

    /**
     * Generated from protobuf field <code>optional uint32 dhcpv4_lease_duration_s = 1016 [json_name = "dhcpv4LeaseDurationS"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDhcpv4LeaseDurationS($var)
    {
        GPBUtil::checkUint32($var);
        $this->dhcpv4_lease_duration_s = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string domain = 1011 [json_name = "domain"];</code>
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
     * Generated from protobuf field <code>optional string domain = 1011 [json_name = "domain"];</code>
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

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiConfig.BasicServiceSet basic_service_sets = 1007 [json_name = "basicServiceSets"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBasicServiceSets()
    {
        return $this->basic_service_sets;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiConfig.BasicServiceSet basic_service_sets = 1007 [json_name = "basicServiceSets"];</code>
     *
     * @param  array<\SpaceX\API\Device\WifiConfig\BasicServiceSet>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setBasicServiceSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\WifiConfig\BasicServiceSet::class);
        $this->basic_service_sets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool client_isolation = 1008 [json_name = "clientIsolation"];</code>
     *
     * @return bool
     */
    public function getClientIsolation()
    {
        return isset($this->client_isolation) ? $this->client_isolation : false;
    }

    public function hasClientIsolation()
    {
        return isset($this->client_isolation);
    }

    public function clearClientIsolation()
    {
        unset($this->client_isolation);
    }

    /**
     * Generated from protobuf field <code>optional bool client_isolation = 1008 [json_name = "clientIsolation"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setClientIsolation($var)
    {
        GPBUtil::checkBool($var);
        $this->client_isolation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool guest = 1009 [json_name = "guest"];</code>
     *
     * @return bool
     */
    public function getGuest()
    {
        return isset($this->guest) ? $this->guest : false;
    }

    public function hasGuest()
    {
        return isset($this->guest);
    }

    public function clearGuest()
    {
        unset($this->guest);
    }

    /**
     * Generated from protobuf field <code>optional bool guest = 1009 [json_name = "guest"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setGuest($var)
    {
        GPBUtil::checkBool($var);
        $this->guest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string landing = 1010 [json_name = "landing"];</code>
     *
     * @return string
     */
    public function getLanding()
    {
        return isset($this->landing) ? $this->landing : '';
    }

    public function hasLanding()
    {
        return isset($this->landing);
    }

    public function clearLanding()
    {
        unset($this->landing);
    }

    /**
     * Generated from protobuf field <code>optional string landing = 1010 [json_name = "landing"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setLanding($var)
    {
        GPBUtil::checkString($var, true);
        $this->landing = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool landing_page_v2 = 1017 [json_name = "landingPageV2"];</code>
     *
     * @return bool
     */
    public function getLandingPageV2()
    {
        return isset($this->landing_page_v2) ? $this->landing_page_v2 : false;
    }

    public function hasLandingPageV2()
    {
        return isset($this->landing_page_v2);
    }

    public function clearLandingPageV2()
    {
        unset($this->landing_page_v2);
    }

    /**
     * Generated from protobuf field <code>optional bool landing_page_v2 = 1017 [json_name = "landingPageV2"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setLandingPageV2($var)
    {
        GPBUtil::checkBool($var);
        $this->landing_page_v2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool sandbox_enabled = 1020 [json_name = "sandboxEnabled"];</code>
     *
     * @return bool
     */
    public function getSandboxEnabled()
    {
        return isset($this->sandbox_enabled) ? $this->sandbox_enabled : false;
    }

    public function hasSandboxEnabled()
    {
        return isset($this->sandbox_enabled);
    }

    public function clearSandboxEnabled()
    {
        unset($this->sandbox_enabled);
    }

    /**
     * Generated from protobuf field <code>optional bool sandbox_enabled = 1020 [json_name = "sandboxEnabled"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setSandboxEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->sandbox_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string sandbox_domain_allow_list = 1022 [json_name = "sandboxDomainAllowList"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSandboxDomainAllowList()
    {
        return $this->sandbox_domain_allow_list;
    }

    /**
     * Generated from protobuf field <code>repeated string sandbox_domain_allow_list = 1022 [json_name = "sandboxDomainAllowList"];</code>
     *
     * @param  array<string>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setSandboxDomainAllowList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sandbox_domain_allow_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 sandbox_id = 1023 [json_name = "sandboxId"];</code>
     *
     * @return int
     */
    public function getSandboxId()
    {
        return isset($this->sandbox_id) ? $this->sandbox_id : 0;
    }

    public function hasSandboxId()
    {
        return isset($this->sandbox_id);
    }

    public function clearSandboxId()
    {
        unset($this->sandbox_id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 sandbox_id = 1023 [json_name = "sandboxId"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setSandboxId($var)
    {
        GPBUtil::checkUint32($var);
        $this->sandbox_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool internal = 1013 [json_name = "internal"];</code>
     *
     * @return bool
     */
    public function getInternal()
    {
        return isset($this->internal) ? $this->internal : false;
    }

    public function hasInternal()
    {
        return isset($this->internal);
    }

    public function clearInternal()
    {
        unset($this->internal);
    }

    /**
     * Generated from protobuf field <code>optional bool internal = 1013 [json_name = "internal"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setInternal($var)
    {
        GPBUtil::checkBool($var);
        $this->internal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 vlan = 1014 [json_name = "vlan"];</code>
     *
     * @return int
     */
    public function getVlan()
    {
        return isset($this->vlan) ? $this->vlan : 0;
    }

    public function hasVlan()
    {
        return isset($this->vlan);
    }

    public function clearVlan()
    {
        unset($this->vlan);
    }

    /**
     * Generated from protobuf field <code>optional uint32 vlan = 1014 [json_name = "vlan"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setVlan($var)
    {
        GPBUtil::checkUint32($var);
        $this->vlan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.CaptivePortal captive_portal = 1024 [json_name = "captivePortal"];</code>
     *
     * @return \SpaceX\API\Device\CaptivePortal|null
     */
    public function getCaptivePortal()
    {
        return $this->captive_portal;
    }

    public function hasCaptivePortal()
    {
        return isset($this->captive_portal);
    }

    public function clearCaptivePortal()
    {
        unset($this->captive_portal);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.CaptivePortal captive_portal = 1024 [json_name = "captivePortal"];</code>
     *
     * @param  \SpaceX\API\Device\CaptivePortal  $var
     * @return $this
     */
    public function setCaptivePortal($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\CaptivePortal::class);
        $this->captive_portal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 network_groups = 1026 [json_name = "networkGroups"];</code>
     *
     * @return int
     */
    public function getNetworkGroups()
    {
        return isset($this->network_groups) ? $this->network_groups : 0;
    }

    public function hasNetworkGroups()
    {
        return isset($this->network_groups);
    }

    public function clearNetworkGroups()
    {
        unset($this->network_groups);
    }

    /**
     * Generated from protobuf field <code>optional uint32 network_groups = 1026 [json_name = "networkGroups"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setNetworkGroups($var)
    {
        GPBUtil::checkUint32($var);
        $this->network_groups = $var;

        return $this;
    }
}
