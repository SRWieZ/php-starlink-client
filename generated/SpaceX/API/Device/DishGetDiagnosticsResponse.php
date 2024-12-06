<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.DishGetDiagnosticsResponse</code>
 */
class DishGetDiagnosticsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string id = 1 [json_name = "id"];</code>
     */
    protected $id = null;

    /**
     * Generated from protobuf field <code>optional string hardware_version = 2 [json_name = "hardwareVersion"];</code>
     */
    protected $hardware_version = null;

    /**
     * Generated from protobuf field <code>optional string software_version = 3 [json_name = "softwareVersion"];</code>
     */
    protected $software_version = null;

    /**
     * Generated from protobuf field <code>optional int32 utc_offset_s = 4 [json_name = "utcOffsetS"];</code>
     */
    protected $utc_offset_s = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.TestResult hardware_self_test = 7 [json_name = "hardwareSelfTest"];</code>
     */
    protected $hardware_self_test = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.Alerts alerts = 5 [json_name = "alerts"];</code>
     */
    protected $alerts = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.DisablementCode disablement_code = 6 [json_name = "disablementCode"];</code>
     */
    protected $disablement_code = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.Location location = 8 [json_name = "location"];</code>
     */
    protected $location = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.AlignmentStats alignment_stats = 9 [json_name = "alignmentStats"];</code>
     */
    protected $alignment_stats = null;

    /**
     * Generated from protobuf field <code>optional bool stowed = 10 [json_name = "stowed"];</code>
     */
    protected $stowed = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $id
     * @type string $hardware_version
     * @type string $software_version
     * @type int $utc_offset_s
     * @type int $hardware_self_test
     * @type \SpaceX\API\Device\DishGetDiagnosticsResponse\Alerts $alerts
     * @type int $disablement_code
     * @type \SpaceX\API\Device\DishGetDiagnosticsResponse\Location $location
     * @type \SpaceX\API\Device\DishGetDiagnosticsResponse\AlignmentStats $alignment_stats
     * @type bool $stowed
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string id = 1 [json_name = "id"];</code>
     *
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
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
     * Generated from protobuf field <code>optional string id = 1 [json_name = "id"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

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
     * Generated from protobuf field <code>optional string software_version = 3 [json_name = "softwareVersion"];</code>
     *
     * @return string
     */
    public function getSoftwareVersion()
    {
        return isset($this->software_version) ? $this->software_version : '';
    }

    public function hasSoftwareVersion()
    {
        return isset($this->software_version);
    }

    public function clearSoftwareVersion()
    {
        unset($this->software_version);
    }

    /**
     * Generated from protobuf field <code>optional string software_version = 3 [json_name = "softwareVersion"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setSoftwareVersion($var)
    {
        GPBUtil::checkString($var, true);
        $this->software_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 utc_offset_s = 4 [json_name = "utcOffsetS"];</code>
     *
     * @return int
     */
    public function getUtcOffsetS()
    {
        return isset($this->utc_offset_s) ? $this->utc_offset_s : 0;
    }

    public function hasUtcOffsetS()
    {
        return isset($this->utc_offset_s);
    }

    public function clearUtcOffsetS()
    {
        unset($this->utc_offset_s);
    }

    /**
     * Generated from protobuf field <code>optional int32 utc_offset_s = 4 [json_name = "utcOffsetS"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setUtcOffsetS($var)
    {
        GPBUtil::checkInt32($var);
        $this->utc_offset_s = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.TestResult hardware_self_test = 7 [json_name = "hardwareSelfTest"];</code>
     *
     * @return int
     */
    public function getHardwareSelfTest()
    {
        return isset($this->hardware_self_test) ? $this->hardware_self_test : 0;
    }

    public function hasHardwareSelfTest()
    {
        return isset($this->hardware_self_test);
    }

    public function clearHardwareSelfTest()
    {
        unset($this->hardware_self_test);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.TestResult hardware_self_test = 7 [json_name = "hardwareSelfTest"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setHardwareSelfTest($var)
    {
        GPBUtil::checkEnum($var, \SpaceX\API\Device\DishGetDiagnosticsResponse\TestResult::class);
        $this->hardware_self_test = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.Alerts alerts = 5 [json_name = "alerts"];</code>
     *
     * @return \SpaceX\API\Device\DishGetDiagnosticsResponse\Alerts|null
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
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.Alerts alerts = 5 [json_name = "alerts"];</code>
     *
     * @param  \SpaceX\API\Device\DishGetDiagnosticsResponse\Alerts  $var
     * @return $this
     */
    public function setAlerts($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DishGetDiagnosticsResponse\Alerts::class);
        $this->alerts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.DisablementCode disablement_code = 6 [json_name = "disablementCode"];</code>
     *
     * @return int
     */
    public function getDisablementCode()
    {
        return isset($this->disablement_code) ? $this->disablement_code : 0;
    }

    public function hasDisablementCode()
    {
        return isset($this->disablement_code);
    }

    public function clearDisablementCode()
    {
        unset($this->disablement_code);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.DisablementCode disablement_code = 6 [json_name = "disablementCode"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDisablementCode($var)
    {
        GPBUtil::checkEnum($var, \SpaceX\API\Device\DishGetDiagnosticsResponse\DisablementCode::class);
        $this->disablement_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.Location location = 8 [json_name = "location"];</code>
     *
     * @return \SpaceX\API\Device\DishGetDiagnosticsResponse\Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.Location location = 8 [json_name = "location"];</code>
     *
     * @param  \SpaceX\API\Device\DishGetDiagnosticsResponse\Location  $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DishGetDiagnosticsResponse\Location::class);
        $this->location = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.AlignmentStats alignment_stats = 9 [json_name = "alignmentStats"];</code>
     *
     * @return \SpaceX\API\Device\DishGetDiagnosticsResponse\AlignmentStats|null
     */
    public function getAlignmentStats()
    {
        return $this->alignment_stats;
    }

    public function hasAlignmentStats()
    {
        return isset($this->alignment_stats);
    }

    public function clearAlignmentStats()
    {
        unset($this->alignment_stats);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetDiagnosticsResponse.AlignmentStats alignment_stats = 9 [json_name = "alignmentStats"];</code>
     *
     * @param  \SpaceX\API\Device\DishGetDiagnosticsResponse\AlignmentStats  $var
     * @return $this
     */
    public function setAlignmentStats($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DishGetDiagnosticsResponse\AlignmentStats::class);
        $this->alignment_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool stowed = 10 [json_name = "stowed"];</code>
     *
     * @return bool
     */
    public function getStowed()
    {
        return isset($this->stowed) ? $this->stowed : false;
    }

    public function hasStowed()
    {
        return isset($this->stowed);
    }

    public function clearStowed()
    {
        unset($this->stowed);
    }

    /**
     * Generated from protobuf field <code>optional bool stowed = 10 [json_name = "stowed"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setStowed($var)
    {
        GPBUtil::checkBool($var);
        $this->stowed = $var;

        return $this;
    }
}
