<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiMeshJoin</code>
 */
class WifiMeshJoin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint64 incarnation = 1 [json_name = "incarnation"];</code>
     */
    protected $incarnation = null;

    /**
     * Generated from protobuf field <code>optional string hardware_version = 2 [json_name = "hardwareVersion"];</code>
     */
    protected $hardware_version = null;

    /**
     * Generated from protobuf field <code>optional bool supports_5ghz_high = 3 [json_name = "supports5ghzHigh"];</code>
     */
    protected $supports_5ghz_high = null;

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiSiteSurveyResult siteSurveyScan = 4 [json_name = "siteSurveyScan"];</code>
     */
    private $siteSurveyScan;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int|string $incarnation
     * @type string $hardware_version
     * @type bool $supports_5ghz_high
     * @type array<\SpaceX\API\Device\WifiSiteSurveyResult>|\Google\Protobuf\Internal\RepeatedField $siteSurveyScan
     *                                                                                              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint64 incarnation = 1 [json_name = "incarnation"];</code>
     *
     * @return int|string
     */
    public function getIncarnation()
    {
        return isset($this->incarnation) ? $this->incarnation : 0;
    }

    public function hasIncarnation()
    {
        return isset($this->incarnation);
    }

    public function clearIncarnation()
    {
        unset($this->incarnation);
    }

    /**
     * Generated from protobuf field <code>optional uint64 incarnation = 1 [json_name = "incarnation"];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setIncarnation($var)
    {
        GPBUtil::checkUint64($var);
        $this->incarnation = $var;

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
     * Generated from protobuf field <code>optional bool supports_5ghz_high = 3 [json_name = "supports5ghzHigh"];</code>
     *
     * @return bool
     */
    public function getSupports5GhzHigh()
    {
        return isset($this->supports_5ghz_high) ? $this->supports_5ghz_high : false;
    }

    public function hasSupports5GhzHigh()
    {
        return isset($this->supports_5ghz_high);
    }

    public function clearSupports5GhzHigh()
    {
        unset($this->supports_5ghz_high);
    }

    /**
     * Generated from protobuf field <code>optional bool supports_5ghz_high = 3 [json_name = "supports5ghzHigh"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setSupports5GhzHigh($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_5ghz_high = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiSiteSurveyResult siteSurveyScan = 4 [json_name = "siteSurveyScan"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSiteSurveyScan()
    {
        return $this->siteSurveyScan;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.WifiSiteSurveyResult siteSurveyScan = 4 [json_name = "siteSurveyScan"];</code>
     *
     * @param  array<\SpaceX\API\Device\WifiSiteSurveyResult>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setSiteSurveyScan($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\WifiSiteSurveyResult::class);
        $this->siteSurveyScan = $arr;

        return $this;
    }
}
