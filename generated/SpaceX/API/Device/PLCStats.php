<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.PLCStats</code>
 */
class PLCStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool receiving_plc = 1 [json_name = "receivingPlc"];</code>
     */
    protected $receiving_plc = null;

    /**
     * Generated from protobuf field <code>optional uint32 average_time_to_empty = 2 [json_name = "averageTimeToEmpty"];</code>
     */
    protected $average_time_to_empty = null;

    /**
     * Generated from protobuf field <code>optional uint32 average_time_to_full = 3 [json_name = "averageTimeToFull"];</code>
     */
    protected $average_time_to_full = null;

    /**
     * Generated from protobuf field <code>optional uint32 battery_health = 4 [json_name = "batteryHealth"];</code>
     */
    protected $battery_health = null;

    /**
     * Generated from protobuf field <code>optional uint32 hardware_revision_id = 5 [json_name = "hardwareRevisionId"];</code>
     */
    protected $hardware_revision_id = null;

    /**
     * Generated from protobuf field <code>optional bool permanent_failure = 6 [json_name = "permanentFailure"];</code>
     */
    protected $permanent_failure = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_1_stats = 7 [json_name = "port1Stats"];</code>
     */
    protected $port_1_stats = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_2_stats = 8 [json_name = "port2Stats"];</code>
     */
    protected $port_2_stats = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_3_stats = 9 [json_name = "port3Stats"];</code>
     */
    protected $port_3_stats = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCStats.ProtocolRevision plc_revision = 10 [json_name = "plcRevision"];</code>
     */
    protected $plc_revision = null;

    /**
     * Generated from protobuf field <code>optional bool safety_mode_active = 11 [json_name = "safetyModeActive"];</code>
     */
    protected $safety_mode_active = null;

    /**
     * Generated from protobuf field <code>optional uint32 state_of_charge = 12 [json_name = "stateOfCharge"];</code>
     */
    protected $state_of_charge = null;

    /**
     * Generated from protobuf field <code>optional uint32 thermal_throttle_level = 13 [json_name = "thermalThrottleLevel"];</code>
     */
    protected $thermal_throttle_level = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type bool $receiving_plc
     * @type int $average_time_to_empty
     * @type int $average_time_to_full
     * @type int $battery_health
     * @type int $hardware_revision_id
     * @type bool $permanent_failure
     * @type \SpaceX\API\Device\PLCPortStats $port_1_stats
     * @type \SpaceX\API\Device\PLCPortStats $port_2_stats
     * @type \SpaceX\API\Device\PLCPortStats $port_3_stats
     * @type int $plc_revision
     * @type bool $safety_mode_active
     * @type int $state_of_charge
     * @type int $thermal_throttle_level
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Dish::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool receiving_plc = 1 [json_name = "receivingPlc"];</code>
     *
     * @return bool
     */
    public function getReceivingPlc()
    {
        return isset($this->receiving_plc) ? $this->receiving_plc : false;
    }

    public function hasReceivingPlc()
    {
        return isset($this->receiving_plc);
    }

    public function clearReceivingPlc()
    {
        unset($this->receiving_plc);
    }

    /**
     * Generated from protobuf field <code>optional bool receiving_plc = 1 [json_name = "receivingPlc"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setReceivingPlc($var)
    {
        GPBUtil::checkBool($var);
        $this->receiving_plc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 average_time_to_empty = 2 [json_name = "averageTimeToEmpty"];</code>
     *
     * @return int
     */
    public function getAverageTimeToEmpty()
    {
        return isset($this->average_time_to_empty) ? $this->average_time_to_empty : 0;
    }

    public function hasAverageTimeToEmpty()
    {
        return isset($this->average_time_to_empty);
    }

    public function clearAverageTimeToEmpty()
    {
        unset($this->average_time_to_empty);
    }

    /**
     * Generated from protobuf field <code>optional uint32 average_time_to_empty = 2 [json_name = "averageTimeToEmpty"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setAverageTimeToEmpty($var)
    {
        GPBUtil::checkUint32($var);
        $this->average_time_to_empty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 average_time_to_full = 3 [json_name = "averageTimeToFull"];</code>
     *
     * @return int
     */
    public function getAverageTimeToFull()
    {
        return isset($this->average_time_to_full) ? $this->average_time_to_full : 0;
    }

    public function hasAverageTimeToFull()
    {
        return isset($this->average_time_to_full);
    }

    public function clearAverageTimeToFull()
    {
        unset($this->average_time_to_full);
    }

    /**
     * Generated from protobuf field <code>optional uint32 average_time_to_full = 3 [json_name = "averageTimeToFull"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setAverageTimeToFull($var)
    {
        GPBUtil::checkUint32($var);
        $this->average_time_to_full = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 battery_health = 4 [json_name = "batteryHealth"];</code>
     *
     * @return int
     */
    public function getBatteryHealth()
    {
        return isset($this->battery_health) ? $this->battery_health : 0;
    }

    public function hasBatteryHealth()
    {
        return isset($this->battery_health);
    }

    public function clearBatteryHealth()
    {
        unset($this->battery_health);
    }

    /**
     * Generated from protobuf field <code>optional uint32 battery_health = 4 [json_name = "batteryHealth"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setBatteryHealth($var)
    {
        GPBUtil::checkUint32($var);
        $this->battery_health = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 hardware_revision_id = 5 [json_name = "hardwareRevisionId"];</code>
     *
     * @return int
     */
    public function getHardwareRevisionId()
    {
        return isset($this->hardware_revision_id) ? $this->hardware_revision_id : 0;
    }

    public function hasHardwareRevisionId()
    {
        return isset($this->hardware_revision_id);
    }

    public function clearHardwareRevisionId()
    {
        unset($this->hardware_revision_id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 hardware_revision_id = 5 [json_name = "hardwareRevisionId"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setHardwareRevisionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->hardware_revision_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool permanent_failure = 6 [json_name = "permanentFailure"];</code>
     *
     * @return bool
     */
    public function getPermanentFailure()
    {
        return isset($this->permanent_failure) ? $this->permanent_failure : false;
    }

    public function hasPermanentFailure()
    {
        return isset($this->permanent_failure);
    }

    public function clearPermanentFailure()
    {
        unset($this->permanent_failure);
    }

    /**
     * Generated from protobuf field <code>optional bool permanent_failure = 6 [json_name = "permanentFailure"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setPermanentFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->permanent_failure = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_1_stats = 7 [json_name = "port1Stats"];</code>
     *
     * @return \SpaceX\API\Device\PLCPortStats|null
     */
    public function getPort1Stats()
    {
        return $this->port_1_stats;
    }

    public function hasPort1Stats()
    {
        return isset($this->port_1_stats);
    }

    public function clearPort1Stats()
    {
        unset($this->port_1_stats);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_1_stats = 7 [json_name = "port1Stats"];</code>
     *
     * @param  \SpaceX\API\Device\PLCPortStats  $var
     * @return $this
     */
    public function setPort1Stats($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\PLCPortStats::class);
        $this->port_1_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_2_stats = 8 [json_name = "port2Stats"];</code>
     *
     * @return \SpaceX\API\Device\PLCPortStats|null
     */
    public function getPort2Stats()
    {
        return $this->port_2_stats;
    }

    public function hasPort2Stats()
    {
        return isset($this->port_2_stats);
    }

    public function clearPort2Stats()
    {
        unset($this->port_2_stats);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_2_stats = 8 [json_name = "port2Stats"];</code>
     *
     * @param  \SpaceX\API\Device\PLCPortStats  $var
     * @return $this
     */
    public function setPort2Stats($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\PLCPortStats::class);
        $this->port_2_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_3_stats = 9 [json_name = "port3Stats"];</code>
     *
     * @return \SpaceX\API\Device\PLCPortStats|null
     */
    public function getPort3Stats()
    {
        return $this->port_3_stats;
    }

    public function hasPort3Stats()
    {
        return isset($this->port_3_stats);
    }

    public function clearPort3Stats()
    {
        unset($this->port_3_stats);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCPortStats port_3_stats = 9 [json_name = "port3Stats"];</code>
     *
     * @param  \SpaceX\API\Device\PLCPortStats  $var
     * @return $this
     */
    public function setPort3Stats($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\PLCPortStats::class);
        $this->port_3_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCStats.ProtocolRevision plc_revision = 10 [json_name = "plcRevision"];</code>
     *
     * @return int
     */
    public function getPlcRevision()
    {
        return isset($this->plc_revision) ? $this->plc_revision : 0;
    }

    public function hasPlcRevision()
    {
        return isset($this->plc_revision);
    }

    public function clearPlcRevision()
    {
        unset($this->plc_revision);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.PLCStats.ProtocolRevision plc_revision = 10 [json_name = "plcRevision"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setPlcRevision($var)
    {
        GPBUtil::checkEnum($var, \SpaceX\API\Device\PLCStats\ProtocolRevision::class);
        $this->plc_revision = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool safety_mode_active = 11 [json_name = "safetyModeActive"];</code>
     *
     * @return bool
     */
    public function getSafetyModeActive()
    {
        return isset($this->safety_mode_active) ? $this->safety_mode_active : false;
    }

    public function hasSafetyModeActive()
    {
        return isset($this->safety_mode_active);
    }

    public function clearSafetyModeActive()
    {
        unset($this->safety_mode_active);
    }

    /**
     * Generated from protobuf field <code>optional bool safety_mode_active = 11 [json_name = "safetyModeActive"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setSafetyModeActive($var)
    {
        GPBUtil::checkBool($var);
        $this->safety_mode_active = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 state_of_charge = 12 [json_name = "stateOfCharge"];</code>
     *
     * @return int
     */
    public function getStateOfCharge()
    {
        return isset($this->state_of_charge) ? $this->state_of_charge : 0;
    }

    public function hasStateOfCharge()
    {
        return isset($this->state_of_charge);
    }

    public function clearStateOfCharge()
    {
        unset($this->state_of_charge);
    }

    /**
     * Generated from protobuf field <code>optional uint32 state_of_charge = 12 [json_name = "stateOfCharge"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setStateOfCharge($var)
    {
        GPBUtil::checkUint32($var);
        $this->state_of_charge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 thermal_throttle_level = 13 [json_name = "thermalThrottleLevel"];</code>
     *
     * @return int
     */
    public function getThermalThrottleLevel()
    {
        return isset($this->thermal_throttle_level) ? $this->thermal_throttle_level : 0;
    }

    public function hasThermalThrottleLevel()
    {
        return isset($this->thermal_throttle_level);
    }

    public function clearThermalThrottleLevel()
    {
        unset($this->thermal_throttle_level);
    }

    /**
     * Generated from protobuf field <code>optional uint32 thermal_throttle_level = 13 [json_name = "thermalThrottleLevel"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setThermalThrottleLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->thermal_throttle_level = $var;

        return $this;
    }
}