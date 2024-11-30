<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/device.proto

namespace SpaceX\API\Device\DishGetDiagnosticsResponse;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.DishGetDiagnosticsResponse.AlignmentStats</code>
 */
class AlignmentStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional float boresight_azimuth_deg = 1 [json_name = "boresightAzimuthDeg"];</code>
     */
    protected $boresight_azimuth_deg = null;

    /**
     * Generated from protobuf field <code>optional float boresight_elevation_deg = 2 [json_name = "boresightElevationDeg"];</code>
     */
    protected $boresight_elevation_deg = null;

    /**
     * Generated from protobuf field <code>optional float desired_boresight_azimuth_deg = 3 [json_name = "desiredBoresightAzimuthDeg"];</code>
     */
    protected $desired_boresight_azimuth_deg = null;

    /**
     * Generated from protobuf field <code>optional float desired_boresight_elevation_deg = 4 [json_name = "desiredBoresightElevationDeg"];</code>
     */
    protected $desired_boresight_elevation_deg = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type float $boresight_azimuth_deg
     * @type float $boresight_elevation_deg
     * @type float $desired_boresight_azimuth_deg
     * @type float $desired_boresight_elevation_deg
     *             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional float boresight_azimuth_deg = 1 [json_name = "boresightAzimuthDeg"];</code>
     *
     * @return float
     */
    public function getBoresightAzimuthDeg()
    {
        return isset($this->boresight_azimuth_deg) ? $this->boresight_azimuth_deg : 0.0;
    }

    public function hasBoresightAzimuthDeg()
    {
        return isset($this->boresight_azimuth_deg);
    }

    public function clearBoresightAzimuthDeg()
    {
        unset($this->boresight_azimuth_deg);
    }

    /**
     * Generated from protobuf field <code>optional float boresight_azimuth_deg = 1 [json_name = "boresightAzimuthDeg"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setBoresightAzimuthDeg($var)
    {
        GPBUtil::checkFloat($var);
        $this->boresight_azimuth_deg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float boresight_elevation_deg = 2 [json_name = "boresightElevationDeg"];</code>
     *
     * @return float
     */
    public function getBoresightElevationDeg()
    {
        return isset($this->boresight_elevation_deg) ? $this->boresight_elevation_deg : 0.0;
    }

    public function hasBoresightElevationDeg()
    {
        return isset($this->boresight_elevation_deg);
    }

    public function clearBoresightElevationDeg()
    {
        unset($this->boresight_elevation_deg);
    }

    /**
     * Generated from protobuf field <code>optional float boresight_elevation_deg = 2 [json_name = "boresightElevationDeg"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setBoresightElevationDeg($var)
    {
        GPBUtil::checkFloat($var);
        $this->boresight_elevation_deg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float desired_boresight_azimuth_deg = 3 [json_name = "desiredBoresightAzimuthDeg"];</code>
     *
     * @return float
     */
    public function getDesiredBoresightAzimuthDeg()
    {
        return isset($this->desired_boresight_azimuth_deg) ? $this->desired_boresight_azimuth_deg : 0.0;
    }

    public function hasDesiredBoresightAzimuthDeg()
    {
        return isset($this->desired_boresight_azimuth_deg);
    }

    public function clearDesiredBoresightAzimuthDeg()
    {
        unset($this->desired_boresight_azimuth_deg);
    }

    /**
     * Generated from protobuf field <code>optional float desired_boresight_azimuth_deg = 3 [json_name = "desiredBoresightAzimuthDeg"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setDesiredBoresightAzimuthDeg($var)
    {
        GPBUtil::checkFloat($var);
        $this->desired_boresight_azimuth_deg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float desired_boresight_elevation_deg = 4 [json_name = "desiredBoresightElevationDeg"];</code>
     *
     * @return float
     */
    public function getDesiredBoresightElevationDeg()
    {
        return isset($this->desired_boresight_elevation_deg) ? $this->desired_boresight_elevation_deg : 0.0;
    }

    public function hasDesiredBoresightElevationDeg()
    {
        return isset($this->desired_boresight_elevation_deg);
    }

    public function clearDesiredBoresightElevationDeg()
    {
        unset($this->desired_boresight_elevation_deg);
    }

    /**
     * Generated from protobuf field <code>optional float desired_boresight_elevation_deg = 4 [json_name = "desiredBoresightElevationDeg"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setDesiredBoresightElevationDeg($var)
    {
        GPBUtil::checkFloat($var);
        $this->desired_boresight_elevation_deg = $var;

        return $this;
    }
}
