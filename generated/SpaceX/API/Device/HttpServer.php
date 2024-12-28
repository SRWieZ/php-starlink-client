<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi_config.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.HttpServer</code>
 */
class HttpServer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string domain_name = 1 [json_name = "domainName"];</code>
     */
    protected $domain_name = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.TlsConfig tls = 2 [json_name = "tls"];</code>
     */
    protected $tls = null;

    /**
     * Generated from protobuf field <code>optional string file_content_id = 3 [json_name = "fileContentId"];</code>
     */
    protected $file_content_id = null;

    /**
     * Generated from protobuf field <code>optional string file_content_hash = 4 [json_name = "fileContentHash"];</code>
     */
    protected $file_content_hash = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $domain_name
     * @type \SpaceX\API\Device\TlsConfig $tls
     * @type string $file_content_id
     * @type string $file_content_hash
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\WifiConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string domain_name = 1 [json_name = "domainName"];</code>
     *
     * @return string
     */
    public function getDomainName()
    {
        return isset($this->domain_name) ? $this->domain_name : '';
    }

    public function hasDomainName()
    {
        return isset($this->domain_name);
    }

    public function clearDomainName()
    {
        unset($this->domain_name);
    }

    /**
     * Generated from protobuf field <code>optional string domain_name = 1 [json_name = "domainName"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, true);
        $this->domain_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.TlsConfig tls = 2 [json_name = "tls"];</code>
     *
     * @return \SpaceX\API\Device\TlsConfig|null
     */
    public function getTls()
    {
        return $this->tls;
    }

    public function hasTls()
    {
        return isset($this->tls);
    }

    public function clearTls()
    {
        unset($this->tls);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.TlsConfig tls = 2 [json_name = "tls"];</code>
     *
     * @param  \SpaceX\API\Device\TlsConfig  $var
     * @return $this
     */
    public function setTls($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\TlsConfig::class);
        $this->tls = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string file_content_id = 3 [json_name = "fileContentId"];</code>
     *
     * @return string
     */
    public function getFileContentId()
    {
        return isset($this->file_content_id) ? $this->file_content_id : '';
    }

    public function hasFileContentId()
    {
        return isset($this->file_content_id);
    }

    public function clearFileContentId()
    {
        unset($this->file_content_id);
    }

    /**
     * Generated from protobuf field <code>optional string file_content_id = 3 [json_name = "fileContentId"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setFileContentId($var)
    {
        GPBUtil::checkString($var, true);
        $this->file_content_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string file_content_hash = 4 [json_name = "fileContentHash"];</code>
     *
     * @return string
     */
    public function getFileContentHash()
    {
        return isset($this->file_content_hash) ? $this->file_content_hash : '';
    }

    public function hasFileContentHash()
    {
        return isset($this->file_content_hash);
    }

    public function clearFileContentHash()
    {
        unset($this->file_content_hash);
    }

    /**
     * Generated from protobuf field <code>optional string file_content_hash = 4 [json_name = "fileContentHash"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setFileContentHash($var)
    {
        GPBUtil::checkString($var, true);
        $this->file_content_hash = $var;

        return $this;
    }
}
