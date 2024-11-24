<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/common.proto

namespace SpaceX\API\Device\BootInfo;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.BootInfo.CountByReasonDeltaEntry</code>
 */
class CountByReasonDeltaEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional int32 key = 1 [json_name = "key"];</code>
     */
    protected $key = null;

    /**
     * Generated from protobuf field <code>optional int32 value = 2 [json_name = "value"];</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $key
     * @type int $value
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional int32 key = 1 [json_name = "key"];</code>
     *
     * @return int
     */
    public function getKey()
    {
        return isset($this->key) ? $this->key : 0;
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * Generated from protobuf field <code>optional int32 key = 1 [json_name = "key"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkInt32($var);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 value = 2 [json_name = "value"];</code>
     *
     * @return int
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : 0;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>optional int32 value = 2 [json_name = "value"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->value = $var;

        return $this;
    }
}
