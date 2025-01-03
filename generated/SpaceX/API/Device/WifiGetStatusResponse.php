<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiGetStatusResponse</code>
 */
class WifiGetStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceInfo device_info = 3 [json_name = "deviceInfo"];</code>
     */
    protected $device_info = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceState device_state = 4 [json_name = "deviceState"];</code>
     */
    protected $device_state = null;

    /**
     * Generated from protobuf field <code>optional bool captive_portal_enabled = 1 [json_name = "captivePortalEnabled"];</code>
     */
    protected $captive_portal_enabled = null;

    /**
     * Generated from protobuf field <code>optional string ipv4_wan_address = 1003 [json_name = "ipv4WanAddress"];</code>
     */
    protected $ipv4_wan_address = null;

    /**
     * Generated from protobuf field <code>repeated string ipv6_wan_addresses = 1017 [json_name = "ipv6WanAddresses"];</code>
     */
    private $ipv6_wan_addresses;

    /**
     * Generated from protobuf field <code>optional float ping_drop_rate = 1004 [json_name = "pingDropRate"];</code>
     */
    protected $ping_drop_rate = null;

    /**
     * Generated from protobuf field <code>optional float ping_drop_rate_5m = 1021 [json_name = "pingDropRate5m"];</code>
     */
    protected $ping_drop_rate_5m = null;

    /**
     * Generated from protobuf field <code>optional float ping_latency_ms = 1005 [json_name = "pingLatencyMs"];</code>
     */
    protected $ping_latency_ms = null;

    /**
     * Generated from protobuf field <code>optional float dish_ping_drop_rate = 1012 [json_name = "dishPingDropRate"];</code>
     */
    protected $dish_ping_drop_rate = null;

    /**
     * Generated from protobuf field <code>optional float dish_ping_drop_rate_5m = 1018 [json_name = "dishPingDropRate5m"];</code>
     */
    protected $dish_ping_drop_rate_5m = null;

    /**
     * Generated from protobuf field <code>optional float dish_ping_latency_ms = 1013 [json_name = "dishPingLatencyMs"];</code>
     */
    protected $dish_ping_latency_ms = null;

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate = 1014 [json_name = "popPingDropRate"];</code>
     */
    protected $pop_ping_drop_rate = null;

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate_5m = 1020 [json_name = "popPingDropRate5m"];</code>
     */
    protected $pop_ping_drop_rate_5m = null;

    /**
     * Generated from protobuf field <code>optional float pop_ping_latency_ms = 1015 [json_name = "popPingLatencyMs"];</code>
     */
    protected $pop_ping_latency_ms = null;

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_drop_rate = 1027 [json_name = "popIpv6PingDropRate"];</code>
     */
    protected $pop_ipv6_ping_drop_rate = null;

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_drop_rate_5m = 1028 [json_name = "popIpv6PingDropRate5m"];</code>
     */
    protected $pop_ipv6_ping_drop_rate_5m = null;

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_latency_ms = 1029 [json_name = "popIpv6PingLatencyMs"];</code>
     */
    protected $pop_ipv6_ping_latency_ms = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiBandStatus rf_2ghz_status = 1008 [json_name = "rf2ghzStatus"];</code>
     */
    protected $rf_2ghz_status = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiBandStatus rf_5ghz_status = 1009 [json_name = "rf5ghzStatus"];</code>
     */
    protected $rf_5ghz_status = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiAlerts alerts = 1010 [json_name = "alerts"];</code>
     */
    protected $alerts = null;

    /**
     * Generated from protobuf field <code>optional bool is_aviation = 1011 [json_name = "isAviation"];</code>
     */
    protected $is_aviation = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiConfig config = 2000 [json_name = "config"];</code>
     */
    protected $config = null;

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClient clients = 3000 [json_name = "clients"];</code>
     */
    private $clients;

    /**
     * Generated from protobuf field <code>optional bool has_client_index = 3001 [json_name = "hasClientIndex"];</code>
     */
    protected $has_client_index = null;

    /**
     * Generated from protobuf field <code>optional int32 client_index = 3002 [json_name = "clientIndex"];</code>
     */
    protected $client_index = null;

    /**
     * Generated from protobuf field <code>optional bool is_aviation_conformed = 1016 [json_name = "isAviationConformed"];</code>
     */
    protected $is_aviation_conformed = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.RadiusStatsMap radius_stats = 3003 [json_name = "radiusStats"];</code>
     */
    protected $radius_stats = null;

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.DhcpServer dhcp_servers = 1019 [json_name = "dhcpServers"];</code>
     */
    private $dhcp_servers;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PoeStats poe_stats = 1022 [json_name = "poeStats"];</code>
     */
    protected $poe_stats = null;

    /**
     * Generated from protobuf field <code>optional string dish_id = 1023 [json_name = "dishId"];</code>
     */
    protected $dish_id = null;

    /**
     * Generated from protobuf field <code>optional int64 utc_ns = 1024 [json_name = "utcNs"];</code>
     */
    protected $utc_ns = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiSoftwareUpdateStats software_update_stats = 1025 [json_name = "softwareUpdateStats"];</code>
     */
    protected $software_update_stats = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiSetupRequirement setup_requirement = 1026 [json_name = "setupRequirement"];</code>
     */
    protected $setup_requirement = null;

    /**
     * Generated from protobuf field <code>optional float secs_since_last_public_ipv4_change = 1030 [json_name = "secsSinceLastPublicIpv4Change"];</code>
     */
    protected $secs_since_last_public_ipv4_change = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \SpaceX\API\Device\DeviceInfo $device_info
     * @type \SpaceX\API\Device\DeviceState $device_state
     * @type bool $captive_portal_enabled
     * @type string $ipv4_wan_address
     * @type array<string>|\Google\Protobuf\Internal\RepeatedField $ipv6_wan_addresses
     * @type float $ping_drop_rate
     * @type float $ping_drop_rate_5m
     * @type float $ping_latency_ms
     * @type float $dish_ping_drop_rate
     * @type float $dish_ping_drop_rate_5m
     * @type float $dish_ping_latency_ms
     * @type float $pop_ping_drop_rate
     * @type float $pop_ping_drop_rate_5m
     * @type float $pop_ping_latency_ms
     * @type float $pop_ipv6_ping_drop_rate
     * @type float $pop_ipv6_ping_drop_rate_5m
     * @type float $pop_ipv6_ping_latency_ms
     * @type \SpaceX\API\Device\WifiBandStatus $rf_2ghz_status
     * @type \SpaceX\API\Device\WifiBandStatus $rf_5ghz_status
     * @type \SpaceX\API\Device\WifiAlerts $alerts
     * @type bool $is_aviation
     * @type \SpaceX\API\Device\WifiConfig $config
     * @type array<\SpaceX\API\Device\WifiClient>|\Google\Protobuf\Internal\RepeatedField $clients
     * @type bool $has_client_index
     * @type int $client_index
     * @type bool $is_aviation_conformed
     * @type \SpaceX\API\Device\RadiusStatsMap $radius_stats
     * @type array<\SpaceX\API\Device\DhcpServer>|\Google\Protobuf\Internal\RepeatedField $dhcp_servers
     * @type \SpaceX\API\Device\PoeStats $poe_stats
     * @type string $dish_id
     * @type int|string $utc_ns
     * @type \SpaceX\API\Device\WifiSoftwareUpdateStats $software_update_stats
     * @type \SpaceX\API\Device\WifiSetupRequirement $setup_requirement
     * @type float $secs_since_last_public_ipv4_change
     *             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceInfo device_info = 3 [json_name = "deviceInfo"];</code>
     *
     * @return \SpaceX\API\Device\DeviceInfo|null
     */
    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    public function hasDeviceInfo()
    {
        return isset($this->device_info);
    }

    public function clearDeviceInfo()
    {
        unset($this->device_info);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceInfo device_info = 3 [json_name = "deviceInfo"];</code>
     *
     * @param  \SpaceX\API\Device\DeviceInfo  $var
     * @return $this
     */
    public function setDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DeviceInfo::class);
        $this->device_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceState device_state = 4 [json_name = "deviceState"];</code>
     *
     * @return \SpaceX\API\Device\DeviceState|null
     */
    public function getDeviceState()
    {
        return $this->device_state;
    }

    public function hasDeviceState()
    {
        return isset($this->device_state);
    }

    public function clearDeviceState()
    {
        unset($this->device_state);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceState device_state = 4 [json_name = "deviceState"];</code>
     *
     * @param  \SpaceX\API\Device\DeviceState  $var
     * @return $this
     */
    public function setDeviceState($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DeviceState::class);
        $this->device_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool captive_portal_enabled = 1 [json_name = "captivePortalEnabled"];</code>
     *
     * @return bool
     */
    public function getCaptivePortalEnabled()
    {
        return isset($this->captive_portal_enabled) ? $this->captive_portal_enabled : false;
    }

    public function hasCaptivePortalEnabled()
    {
        return isset($this->captive_portal_enabled);
    }

    public function clearCaptivePortalEnabled()
    {
        unset($this->captive_portal_enabled);
    }

    /**
     * Generated from protobuf field <code>optional bool captive_portal_enabled = 1 [json_name = "captivePortalEnabled"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setCaptivePortalEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->captive_portal_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ipv4_wan_address = 1003 [json_name = "ipv4WanAddress"];</code>
     *
     * @return string
     */
    public function getIpv4WanAddress()
    {
        return isset($this->ipv4_wan_address) ? $this->ipv4_wan_address : '';
    }

    public function hasIpv4WanAddress()
    {
        return isset($this->ipv4_wan_address);
    }

    public function clearIpv4WanAddress()
    {
        unset($this->ipv4_wan_address);
    }

    /**
     * Generated from protobuf field <code>optional string ipv4_wan_address = 1003 [json_name = "ipv4WanAddress"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setIpv4WanAddress($var)
    {
        GPBUtil::checkString($var, true);
        $this->ipv4_wan_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string ipv6_wan_addresses = 1017 [json_name = "ipv6WanAddresses"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpv6WanAddresses()
    {
        return $this->ipv6_wan_addresses;
    }

    /**
     * Generated from protobuf field <code>repeated string ipv6_wan_addresses = 1017 [json_name = "ipv6WanAddresses"];</code>
     *
     * @param  array<string>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setIpv6WanAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ipv6_wan_addresses = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float ping_drop_rate = 1004 [json_name = "pingDropRate"];</code>
     *
     * @return float
     */
    public function getPingDropRate()
    {
        return isset($this->ping_drop_rate) ? $this->ping_drop_rate : 0.0;
    }

    public function hasPingDropRate()
    {
        return isset($this->ping_drop_rate);
    }

    public function clearPingDropRate()
    {
        unset($this->ping_drop_rate);
    }

    /**
     * Generated from protobuf field <code>optional float ping_drop_rate = 1004 [json_name = "pingDropRate"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPingDropRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->ping_drop_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float ping_drop_rate_5m = 1021 [json_name = "pingDropRate5m"];</code>
     *
     * @return float
     */
    public function getPingDropRate5M()
    {
        return isset($this->ping_drop_rate_5m) ? $this->ping_drop_rate_5m : 0.0;
    }

    public function hasPingDropRate5M()
    {
        return isset($this->ping_drop_rate_5m);
    }

    public function clearPingDropRate5M()
    {
        unset($this->ping_drop_rate_5m);
    }

    /**
     * Generated from protobuf field <code>optional float ping_drop_rate_5m = 1021 [json_name = "pingDropRate5m"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPingDropRate5M($var)
    {
        GPBUtil::checkFloat($var);
        $this->ping_drop_rate_5m = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float ping_latency_ms = 1005 [json_name = "pingLatencyMs"];</code>
     *
     * @return float
     */
    public function getPingLatencyMs()
    {
        return isset($this->ping_latency_ms) ? $this->ping_latency_ms : 0.0;
    }

    public function hasPingLatencyMs()
    {
        return isset($this->ping_latency_ms);
    }

    public function clearPingLatencyMs()
    {
        unset($this->ping_latency_ms);
    }

    /**
     * Generated from protobuf field <code>optional float ping_latency_ms = 1005 [json_name = "pingLatencyMs"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPingLatencyMs($var)
    {
        GPBUtil::checkFloat($var);
        $this->ping_latency_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float dish_ping_drop_rate = 1012 [json_name = "dishPingDropRate"];</code>
     *
     * @return float
     */
    public function getDishPingDropRate()
    {
        return isset($this->dish_ping_drop_rate) ? $this->dish_ping_drop_rate : 0.0;
    }

    public function hasDishPingDropRate()
    {
        return isset($this->dish_ping_drop_rate);
    }

    public function clearDishPingDropRate()
    {
        unset($this->dish_ping_drop_rate);
    }

    /**
     * Generated from protobuf field <code>optional float dish_ping_drop_rate = 1012 [json_name = "dishPingDropRate"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setDishPingDropRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->dish_ping_drop_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float dish_ping_drop_rate_5m = 1018 [json_name = "dishPingDropRate5m"];</code>
     *
     * @return float
     */
    public function getDishPingDropRate5M()
    {
        return isset($this->dish_ping_drop_rate_5m) ? $this->dish_ping_drop_rate_5m : 0.0;
    }

    public function hasDishPingDropRate5M()
    {
        return isset($this->dish_ping_drop_rate_5m);
    }

    public function clearDishPingDropRate5M()
    {
        unset($this->dish_ping_drop_rate_5m);
    }

    /**
     * Generated from protobuf field <code>optional float dish_ping_drop_rate_5m = 1018 [json_name = "dishPingDropRate5m"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setDishPingDropRate5M($var)
    {
        GPBUtil::checkFloat($var);
        $this->dish_ping_drop_rate_5m = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float dish_ping_latency_ms = 1013 [json_name = "dishPingLatencyMs"];</code>
     *
     * @return float
     */
    public function getDishPingLatencyMs()
    {
        return isset($this->dish_ping_latency_ms) ? $this->dish_ping_latency_ms : 0.0;
    }

    public function hasDishPingLatencyMs()
    {
        return isset($this->dish_ping_latency_ms);
    }

    public function clearDishPingLatencyMs()
    {
        unset($this->dish_ping_latency_ms);
    }

    /**
     * Generated from protobuf field <code>optional float dish_ping_latency_ms = 1013 [json_name = "dishPingLatencyMs"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setDishPingLatencyMs($var)
    {
        GPBUtil::checkFloat($var);
        $this->dish_ping_latency_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate = 1014 [json_name = "popPingDropRate"];</code>
     *
     * @return float
     */
    public function getPopPingDropRate()
    {
        return isset($this->pop_ping_drop_rate) ? $this->pop_ping_drop_rate : 0.0;
    }

    public function hasPopPingDropRate()
    {
        return isset($this->pop_ping_drop_rate);
    }

    public function clearPopPingDropRate()
    {
        unset($this->pop_ping_drop_rate);
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate = 1014 [json_name = "popPingDropRate"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPopPingDropRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->pop_ping_drop_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate_5m = 1020 [json_name = "popPingDropRate5m"];</code>
     *
     * @return float
     */
    public function getPopPingDropRate5M()
    {
        return isset($this->pop_ping_drop_rate_5m) ? $this->pop_ping_drop_rate_5m : 0.0;
    }

    public function hasPopPingDropRate5M()
    {
        return isset($this->pop_ping_drop_rate_5m);
    }

    public function clearPopPingDropRate5M()
    {
        unset($this->pop_ping_drop_rate_5m);
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate_5m = 1020 [json_name = "popPingDropRate5m"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPopPingDropRate5M($var)
    {
        GPBUtil::checkFloat($var);
        $this->pop_ping_drop_rate_5m = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_latency_ms = 1015 [json_name = "popPingLatencyMs"];</code>
     *
     * @return float
     */
    public function getPopPingLatencyMs()
    {
        return isset($this->pop_ping_latency_ms) ? $this->pop_ping_latency_ms : 0.0;
    }

    public function hasPopPingLatencyMs()
    {
        return isset($this->pop_ping_latency_ms);
    }

    public function clearPopPingLatencyMs()
    {
        unset($this->pop_ping_latency_ms);
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_latency_ms = 1015 [json_name = "popPingLatencyMs"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPopPingLatencyMs($var)
    {
        GPBUtil::checkFloat($var);
        $this->pop_ping_latency_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_drop_rate = 1027 [json_name = "popIpv6PingDropRate"];</code>
     *
     * @return float
     */
    public function getPopIpv6PingDropRate()
    {
        return isset($this->pop_ipv6_ping_drop_rate) ? $this->pop_ipv6_ping_drop_rate : 0.0;
    }

    public function hasPopIpv6PingDropRate()
    {
        return isset($this->pop_ipv6_ping_drop_rate);
    }

    public function clearPopIpv6PingDropRate()
    {
        unset($this->pop_ipv6_ping_drop_rate);
    }

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_drop_rate = 1027 [json_name = "popIpv6PingDropRate"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPopIpv6PingDropRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->pop_ipv6_ping_drop_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_drop_rate_5m = 1028 [json_name = "popIpv6PingDropRate5m"];</code>
     *
     * @return float
     */
    public function getPopIpv6PingDropRate5M()
    {
        return isset($this->pop_ipv6_ping_drop_rate_5m) ? $this->pop_ipv6_ping_drop_rate_5m : 0.0;
    }

    public function hasPopIpv6PingDropRate5M()
    {
        return isset($this->pop_ipv6_ping_drop_rate_5m);
    }

    public function clearPopIpv6PingDropRate5M()
    {
        unset($this->pop_ipv6_ping_drop_rate_5m);
    }

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_drop_rate_5m = 1028 [json_name = "popIpv6PingDropRate5m"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPopIpv6PingDropRate5M($var)
    {
        GPBUtil::checkFloat($var);
        $this->pop_ipv6_ping_drop_rate_5m = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_latency_ms = 1029 [json_name = "popIpv6PingLatencyMs"];</code>
     *
     * @return float
     */
    public function getPopIpv6PingLatencyMs()
    {
        return isset($this->pop_ipv6_ping_latency_ms) ? $this->pop_ipv6_ping_latency_ms : 0.0;
    }

    public function hasPopIpv6PingLatencyMs()
    {
        return isset($this->pop_ipv6_ping_latency_ms);
    }

    public function clearPopIpv6PingLatencyMs()
    {
        unset($this->pop_ipv6_ping_latency_ms);
    }

    /**
     * Generated from protobuf field <code>optional float pop_ipv6_ping_latency_ms = 1029 [json_name = "popIpv6PingLatencyMs"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPopIpv6PingLatencyMs($var)
    {
        GPBUtil::checkFloat($var);
        $this->pop_ipv6_ping_latency_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiBandStatus rf_2ghz_status = 1008 [json_name = "rf2ghzStatus"];</code>
     *
     * @return \SpaceX\API\Device\WifiBandStatus|null
     */
    public function getRf2GhzStatus()
    {
        return $this->rf_2ghz_status;
    }

    public function hasRf2GhzStatus()
    {
        return isset($this->rf_2ghz_status);
    }

    public function clearRf2GhzStatus()
    {
        unset($this->rf_2ghz_status);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiBandStatus rf_2ghz_status = 1008 [json_name = "rf2ghzStatus"];</code>
     *
     * @param  \SpaceX\API\Device\WifiBandStatus  $var
     * @return $this
     */
    public function setRf2GhzStatus($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiBandStatus::class);
        $this->rf_2ghz_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiBandStatus rf_5ghz_status = 1009 [json_name = "rf5ghzStatus"];</code>
     *
     * @return \SpaceX\API\Device\WifiBandStatus|null
     */
    public function getRf5GhzStatus()
    {
        return $this->rf_5ghz_status;
    }

    public function hasRf5GhzStatus()
    {
        return isset($this->rf_5ghz_status);
    }

    public function clearRf5GhzStatus()
    {
        unset($this->rf_5ghz_status);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiBandStatus rf_5ghz_status = 1009 [json_name = "rf5ghzStatus"];</code>
     *
     * @param  \SpaceX\API\Device\WifiBandStatus  $var
     * @return $this
     */
    public function setRf5GhzStatus($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiBandStatus::class);
        $this->rf_5ghz_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiAlerts alerts = 1010 [json_name = "alerts"];</code>
     *
     * @return \SpaceX\API\Device\WifiAlerts|null
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    public function hasAlerts()
    {
        return isset($this->alerts);
    }

    public function clearAlerts()
    {
        unset($this->alerts);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiAlerts alerts = 1010 [json_name = "alerts"];</code>
     *
     * @param  \SpaceX\API\Device\WifiAlerts  $var
     * @return $this
     */
    public function setAlerts($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiAlerts::class);
        $this->alerts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool is_aviation = 1011 [json_name = "isAviation"];</code>
     *
     * @return bool
     */
    public function getIsAviation()
    {
        return isset($this->is_aviation) ? $this->is_aviation : false;
    }

    public function hasIsAviation()
    {
        return isset($this->is_aviation);
    }

    public function clearIsAviation()
    {
        unset($this->is_aviation);
    }

    /**
     * Generated from protobuf field <code>optional bool is_aviation = 1011 [json_name = "isAviation"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsAviation($var)
    {
        GPBUtil::checkBool($var);
        $this->is_aviation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiConfig config = 2000 [json_name = "config"];</code>
     *
     * @return \SpaceX\API\Device\WifiConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiConfig config = 2000 [json_name = "config"];</code>
     *
     * @param  \SpaceX\API\Device\WifiConfig  $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClient clients = 3000 [json_name = "clients"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiClient clients = 3000 [json_name = "clients"];</code>
     *
     * @param  array<\SpaceX\API\Device\WifiClient>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setClients($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\WifiClient::class);
        $this->clients = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool has_client_index = 3001 [json_name = "hasClientIndex"];</code>
     *
     * @return bool
     */
    public function getHasClientIndex()
    {
        return isset($this->has_client_index) ? $this->has_client_index : false;
    }

    public function hasHasClientIndex()
    {
        return isset($this->has_client_index);
    }

    public function clearHasClientIndex()
    {
        unset($this->has_client_index);
    }

    /**
     * Generated from protobuf field <code>optional bool has_client_index = 3001 [json_name = "hasClientIndex"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setHasClientIndex($var)
    {
        GPBUtil::checkBool($var);
        $this->has_client_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 client_index = 3002 [json_name = "clientIndex"];</code>
     *
     * @return int
     */
    public function getClientIndex()
    {
        return isset($this->client_index) ? $this->client_index : 0;
    }

    public function hasClientIndex()
    {
        return isset($this->client_index);
    }

    public function clearClientIndex()
    {
        unset($this->client_index);
    }

    /**
     * Generated from protobuf field <code>optional int32 client_index = 3002 [json_name = "clientIndex"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setClientIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->client_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool is_aviation_conformed = 1016 [json_name = "isAviationConformed"];</code>
     *
     * @return bool
     */
    public function getIsAviationConformed()
    {
        return isset($this->is_aviation_conformed) ? $this->is_aviation_conformed : false;
    }

    public function hasIsAviationConformed()
    {
        return isset($this->is_aviation_conformed);
    }

    public function clearIsAviationConformed()
    {
        unset($this->is_aviation_conformed);
    }

    /**
     * Generated from protobuf field <code>optional bool is_aviation_conformed = 1016 [json_name = "isAviationConformed"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsAviationConformed($var)
    {
        GPBUtil::checkBool($var);
        $this->is_aviation_conformed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.RadiusStatsMap radius_stats = 3003 [json_name = "radiusStats"];</code>
     *
     * @return \SpaceX\API\Device\RadiusStatsMap|null
     */
    public function getRadiusStats()
    {
        return $this->radius_stats;
    }

    public function hasRadiusStats()
    {
        return isset($this->radius_stats);
    }

    public function clearRadiusStats()
    {
        unset($this->radius_stats);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.RadiusStatsMap radius_stats = 3003 [json_name = "radiusStats"];</code>
     *
     * @param  \SpaceX\API\Device\RadiusStatsMap  $var
     * @return $this
     */
    public function setRadiusStats($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\RadiusStatsMap::class);
        $this->radius_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.DhcpServer dhcp_servers = 1019 [json_name = "dhcpServers"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDhcpServers()
    {
        return $this->dhcp_servers;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.DhcpServer dhcp_servers = 1019 [json_name = "dhcpServers"];</code>
     *
     * @param  array<\SpaceX\API\Device\DhcpServer>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setDhcpServers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\DhcpServer::class);
        $this->dhcp_servers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PoeStats poe_stats = 1022 [json_name = "poeStats"];</code>
     *
     * @return \SpaceX\API\Device\PoeStats|null
     */
    public function getPoeStats()
    {
        return $this->poe_stats;
    }

    public function hasPoeStats()
    {
        return isset($this->poe_stats);
    }

    public function clearPoeStats()
    {
        unset($this->poe_stats);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PoeStats poe_stats = 1022 [json_name = "poeStats"];</code>
     *
     * @param  \SpaceX\API\Device\PoeStats  $var
     * @return $this
     */
    public function setPoeStats($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\PoeStats::class);
        $this->poe_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string dish_id = 1023 [json_name = "dishId"];</code>
     *
     * @return string
     */
    public function getDishId()
    {
        return isset($this->dish_id) ? $this->dish_id : '';
    }

    public function hasDishId()
    {
        return isset($this->dish_id);
    }

    public function clearDishId()
    {
        unset($this->dish_id);
    }

    /**
     * Generated from protobuf field <code>optional string dish_id = 1023 [json_name = "dishId"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDishId($var)
    {
        GPBUtil::checkString($var, true);
        $this->dish_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int64 utc_ns = 1024 [json_name = "utcNs"];</code>
     *
     * @return int|string
     */
    public function getUtcNs()
    {
        return isset($this->utc_ns) ? $this->utc_ns : 0;
    }

    public function hasUtcNs()
    {
        return isset($this->utc_ns);
    }

    public function clearUtcNs()
    {
        unset($this->utc_ns);
    }

    /**
     * Generated from protobuf field <code>optional int64 utc_ns = 1024 [json_name = "utcNs"];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setUtcNs($var)
    {
        GPBUtil::checkInt64($var);
        $this->utc_ns = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiSoftwareUpdateStats software_update_stats = 1025 [json_name = "softwareUpdateStats"];</code>
     *
     * @return \SpaceX\API\Device\WifiSoftwareUpdateStats|null
     */
    public function getSoftwareUpdateStats()
    {
        return $this->software_update_stats;
    }

    public function hasSoftwareUpdateStats()
    {
        return isset($this->software_update_stats);
    }

    public function clearSoftwareUpdateStats()
    {
        unset($this->software_update_stats);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiSoftwareUpdateStats software_update_stats = 1025 [json_name = "softwareUpdateStats"];</code>
     *
     * @param  \SpaceX\API\Device\WifiSoftwareUpdateStats  $var
     * @return $this
     */
    public function setSoftwareUpdateStats($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiSoftwareUpdateStats::class);
        $this->software_update_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiSetupRequirement setup_requirement = 1026 [json_name = "setupRequirement"];</code>
     *
     * @return \SpaceX\API\Device\WifiSetupRequirement|null
     */
    public function getSetupRequirement()
    {
        return $this->setup_requirement;
    }

    public function hasSetupRequirement()
    {
        return isset($this->setup_requirement);
    }

    public function clearSetupRequirement()
    {
        unset($this->setup_requirement);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiSetupRequirement setup_requirement = 1026 [json_name = "setupRequirement"];</code>
     *
     * @param  \SpaceX\API\Device\WifiSetupRequirement  $var
     * @return $this
     */
    public function setSetupRequirement($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiSetupRequirement::class);
        $this->setup_requirement = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float secs_since_last_public_ipv4_change = 1030 [json_name = "secsSinceLastPublicIpv4Change"];</code>
     *
     * @return float
     */
    public function getSecsSinceLastPublicIpv4Change()
    {
        return isset($this->secs_since_last_public_ipv4_change) ? $this->secs_since_last_public_ipv4_change : 0.0;
    }

    public function hasSecsSinceLastPublicIpv4Change()
    {
        return isset($this->secs_since_last_public_ipv4_change);
    }

    public function clearSecsSinceLastPublicIpv4Change()
    {
        unset($this->secs_since_last_public_ipv4_change);
    }

    /**
     * Generated from protobuf field <code>optional float secs_since_last_public_ipv4_change = 1030 [json_name = "secsSinceLastPublicIpv4Change"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setSecsSinceLastPublicIpv4Change($var)
    {
        GPBUtil::checkFloat($var);
        $this->secs_since_last_public_ipv4_change = $var;

        return $this;
    }
}
