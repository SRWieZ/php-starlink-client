<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.FuseRequest</code>
 */
class FuseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool prevent_reboot = 1 [json_name = "preventReboot"];</code>
     */
    protected $prevent_reboot = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type bool $prevent_reboot
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool prevent_reboot = 1 [json_name = "preventReboot"];</code>
     *
     * @return bool
     */
    public function getPreventReboot()
    {
        return isset($this->prevent_reboot) ? $this->prevent_reboot : false;
    }

    public function hasPreventReboot()
    {
        return isset($this->prevent_reboot);
    }

    public function clearPreventReboot()
    {
        unset($this->prevent_reboot);
    }

    /**
     * Generated from protobuf field <code>optional bool prevent_reboot = 1 [json_name = "preventReboot"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setPreventReboot($var)
    {
        GPBUtil::checkBool($var);
        $this->prevent_reboot = $var;

        return $this;
    }
}
