<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace SpaceX\API\Device\SetTestModeRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.SetTestModeRequest.RfMode</code>
 */
class RfMode
{
    /**
     * Generated from protobuf enum <code>RX = 0;</code>
     */
    const RX = 0;

    /**
     * Generated from protobuf enum <code>IDLE = 1;</code>
     */
    const IDLE = 1;

    /**
     * Generated from protobuf enum <code>TX = 2;</code>
     */
    const TX = 2;

    /**
     * Generated from protobuf enum <code>CAL = 3;</code>
     */
    const CAL = 3;

    /**
     * Generated from protobuf enum <code>USER = 4;</code>
     */
    const USER = 4;

    /**
     * Generated from protobuf enum <code>NORMAL = 420;</code>
     */
    const NORMAL = 420;

    private static $valueToName = [
        self::RX => 'RX',
        self::IDLE => 'IDLE',
        self::TX => 'TX',
        self::CAL => 'CAL',
        self::USER => 'USER',
        self::NORMAL => 'NORMAL',
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
