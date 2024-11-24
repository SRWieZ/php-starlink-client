<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.DishActivateRssiScanRequest</code>
 */
class DishActivateRssiScanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishActivateRssiScan scan_query = 1 [json_name = "scanQuery"];</code>
     */
    protected $scan_query = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \SpaceX\API\Device\DishActivateRssiScan $scan_query
     *                                               }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\Dish::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishActivateRssiScan scan_query = 1 [json_name = "scanQuery"];</code>
     *
     * @return \SpaceX\API\Device\DishActivateRssiScan|null
     */
    public function getScanQuery()
    {
        return $this->scan_query;
    }

    public function hasScanQuery()
    {
        return isset($this->scan_query);
    }

    public function clearScanQuery()
    {
        unset($this->scan_query);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishActivateRssiScan scan_query = 1 [json_name = "scanQuery"];</code>
     *
     * @param  \SpaceX\API\Device\DishActivateRssiScan  $var
     * @return $this
     */
    public function setScanQuery($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DishActivateRssiScan::class);
        $this->scan_query = $var;

        return $this;
    }
}
