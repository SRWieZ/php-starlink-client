<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi_util.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.TxPowerLevel</code>
 */
class TxPowerLevel
{
    /**
     * Generated from protobuf enum <code>TX_POWER_LEVEL_100 = 0;</code>
     */
    const TX_POWER_LEVEL_100 = 0;

    /**
     * Generated from protobuf enum <code>TX_POWER_LEVEL_80 = 1;</code>
     */
    const TX_POWER_LEVEL_80 = 1;

    /**
     * Generated from protobuf enum <code>TX_POWER_LEVEL_50 = 2;</code>
     */
    const TX_POWER_LEVEL_50 = 2;

    /**
     * Generated from protobuf enum <code>TX_POWER_LEVEL_25 = 3;</code>
     */
    const TX_POWER_LEVEL_25 = 3;

    /**
     * Generated from protobuf enum <code>TX_POWER_LEVEL_12 = 4;</code>
     */
    const TX_POWER_LEVEL_12 = 4;

    /**
     * Generated from protobuf enum <code>TX_POWER_LEVEL_6 = 5;</code>
     */
    const TX_POWER_LEVEL_6 = 5;

    private static $valueToName = [
        self::TX_POWER_LEVEL_100 => 'TX_POWER_LEVEL_100',
        self::TX_POWER_LEVEL_80 => 'TX_POWER_LEVEL_80',
        self::TX_POWER_LEVEL_50 => 'TX_POWER_LEVEL_50',
        self::TX_POWER_LEVEL_25 => 'TX_POWER_LEVEL_25',
        self::TX_POWER_LEVEL_12 => 'TX_POWER_LEVEL_12',
        self::TX_POWER_LEVEL_6 => 'TX_POWER_LEVEL_6',
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
