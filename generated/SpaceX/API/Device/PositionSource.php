<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/device.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.PositionSource</code>
 */
class PositionSource
{
    /**
     * Generated from protobuf enum <code>AUTO = 0;</code>
     */
    const AUTO = 0;

    /**
     * Generated from protobuf enum <code>NONE = 1;</code>
     */
    const NONE = 1;

    /**
     * Generated from protobuf enum <code>UT_INFO = 2;</code>
     */
    const UT_INFO = 2;

    /**
     * Generated from protobuf enum <code>EXTERNAL = 3;</code>
     */
    const EXTERNAL = 3;

    /**
     * Generated from protobuf enum <code>GPS = 4;</code>
     */
    const GPS = 4;

    /**
     * Generated from protobuf enum <code>STARLINK = 5;</code>
     */
    const STARLINK = 5;

    /**
     * Generated from protobuf enum <code>GNC_GPS = 6;</code>
     */
    const GNC_GPS = 6;

    /**
     * Generated from protobuf enum <code>GNC_PNT = 7;</code>
     */
    const GNC_PNT = 7;

    /**
     * Generated from protobuf enum <code>GNC_FUSED = 8;</code>
     */
    const GNC_FUSED = 8;

    /**
     * Generated from protobuf enum <code>GNC_RAW = 9;</code>
     */
    const GNC_RAW = 9;

    private static $valueToName = [
        self::AUTO => 'AUTO',
        self::NONE => 'NONE',
        self::UT_INFO => 'UT_INFO',
        self::EXTERNAL => 'EXTERNAL',
        self::GPS => 'GPS',
        self::STARLINK => 'STARLINK',
        self::GNC_GPS => 'GNC_GPS',
        self::GNC_PNT => 'GNC_PNT',
        self::GNC_FUSED => 'GNC_FUSED',
        self::GNC_RAW => 'GNC_RAW',
    ];

    public static function name($value)
    {
        if (! isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }

        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__.'::'.strtoupper($name);
        if (! defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }

        return constant($const);
    }
}
