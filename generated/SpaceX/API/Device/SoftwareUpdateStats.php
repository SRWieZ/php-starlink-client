<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.SoftwareUpdateStats</code>
 */
class SoftwareUpdateStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SoftwareUpdateState software_update_state = 1 [json_name = "softwareUpdateState"];</code>
     */
    protected $software_update_state = null;

    /**
     * Generated from protobuf field <code>optional float software_update_progress = 2 [json_name = "softwareUpdateProgress"];</code>
     */
    protected $software_update_progress = null;

    /**
     * Generated from protobuf field <code>optional bool update_requires_reboot = 3 [json_name = "updateRequiresReboot"];</code>
     */
    protected $update_requires_reboot = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $software_update_state
     * @type float $software_update_progress
     * @type bool $update_requires_reboot
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Dish::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SoftwareUpdateState software_update_state = 1 [json_name = "softwareUpdateState"];</code>
     *
     * @return int
     */
    public function getSoftwareUpdateState()
    {
        return isset($this->software_update_state) ? $this->software_update_state : 0;
    }

    public function hasSoftwareUpdateState()
    {
        return isset($this->software_update_state);
    }

    public function clearSoftwareUpdateState()
    {
        unset($this->software_update_state);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.SoftwareUpdateState software_update_state = 1 [json_name = "softwareUpdateState"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setSoftwareUpdateState($var)
    {
        GPBUtil::checkEnum($var, \SpaceX\API\Device\SoftwareUpdateState::class);
        $this->software_update_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float software_update_progress = 2 [json_name = "softwareUpdateProgress"];</code>
     *
     * @return float
     */
    public function getSoftwareUpdateProgress()
    {
        return isset($this->software_update_progress) ? $this->software_update_progress : 0.0;
    }

    public function hasSoftwareUpdateProgress()
    {
        return isset($this->software_update_progress);
    }

    public function clearSoftwareUpdateProgress()
    {
        unset($this->software_update_progress);
    }

    /**
     * Generated from protobuf field <code>optional float software_update_progress = 2 [json_name = "softwareUpdateProgress"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setSoftwareUpdateProgress($var)
    {
        GPBUtil::checkFloat($var);
        $this->software_update_progress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool update_requires_reboot = 3 [json_name = "updateRequiresReboot"];</code>
     *
     * @return bool
     */
    public function getUpdateRequiresReboot()
    {
        return isset($this->update_requires_reboot) ? $this->update_requires_reboot : false;
    }

    public function hasUpdateRequiresReboot()
    {
        return isset($this->update_requires_reboot);
    }

    public function clearUpdateRequiresReboot()
    {
        unset($this->update_requires_reboot);
    }

    /**
     * Generated from protobuf field <code>optional bool update_requires_reboot = 3 [json_name = "updateRequiresReboot"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setUpdateRequiresReboot($var)
    {
        GPBUtil::checkBool($var);
        $this->update_requires_reboot = $var;

        return $this;
    }
}
