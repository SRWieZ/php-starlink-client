<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi_util.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.RadiusStatsMap</code>
 */
class RadiusStatsMap extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.RadiusStatsMap.RadiusStatsEntry radius_stats = 1 [json_name = "radiusStats"];</code>
     */
    private $radius_stats;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\SpaceX\API\Device\RadiusStatsMap\RadiusStatsEntry>|\Google\Protobuf\Internal\RepeatedField $radius_stats
     *                                                                                                         }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Spacex\Api\Device\WifiUtil::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.RadiusStatsMap.RadiusStatsEntry radius_stats = 1 [json_name = "radiusStats"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRadiusStats()
    {
        return $this->radius_stats;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.RadiusStatsMap.RadiusStatsEntry radius_stats = 1 [json_name = "radiusStats"];</code>
     *
     * @param  array<\SpaceX\API\Device\RadiusStatsMap\RadiusStatsEntry>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setRadiusStats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\RadiusStatsMap\RadiusStatsEntry::class);
        $this->radius_stats = $arr;

        return $this;
    }
}
