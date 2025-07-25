<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/common.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.SoftwareUpdateRequest</code>
 */
class SoftwareUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint64 stream_id = 1 [json_name = "streamId"];</code>
     */
    protected $stream_id = null;

    /**
     * Generated from protobuf field <code>optional bytes data = 2 [json_name = "data"];</code>
     */
    protected $data = null;

    /**
     * Generated from protobuf field <code>optional bool open = 3 [json_name = "open"];</code>
     */
    protected $open = null;

    /**
     * Generated from protobuf field <code>optional bool close = 4 [json_name = "close"];</code>
     */
    protected $close = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int|string $stream_id
     * @type string $data
     * @type bool $open
     * @type bool $close
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint64 stream_id = 1 [json_name = "streamId"];</code>
     *
     * @return int|string
     */
    public function getStreamId()
    {
        return isset($this->stream_id) ? $this->stream_id : 0;
    }

    public function hasStreamId()
    {
        return isset($this->stream_id);
    }

    public function clearStreamId()
    {
        unset($this->stream_id);
    }

    /**
     * Generated from protobuf field <code>optional uint64 stream_id = 1 [json_name = "streamId"];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkUint64($var);
        $this->stream_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes data = 2 [json_name = "data"];</code>
     *
     * @return string
     */
    public function getData()
    {
        return isset($this->data) ? $this->data : '';
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Generated from protobuf field <code>optional bytes data = 2 [json_name = "data"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, false);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool open = 3 [json_name = "open"];</code>
     *
     * @return bool
     */
    public function getOpen()
    {
        return isset($this->open) ? $this->open : false;
    }

    public function hasOpen()
    {
        return isset($this->open);
    }

    public function clearOpen()
    {
        unset($this->open);
    }

    /**
     * Generated from protobuf field <code>optional bool open = 3 [json_name = "open"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setOpen($var)
    {
        GPBUtil::checkBool($var);
        $this->open = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool close = 4 [json_name = "close"];</code>
     *
     * @return bool
     */
    public function getClose()
    {
        return isset($this->close) ? $this->close : false;
    }

    public function hasClose()
    {
        return isset($this->close);
    }

    public function clearClose()
    {
        unset($this->close);
    }

    /**
     * Generated from protobuf field <code>optional bool close = 4 [json_name = "close"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setClose($var)
    {
        GPBUtil::checkBool($var);
        $this->close = $var;

        return $this;
    }
}
