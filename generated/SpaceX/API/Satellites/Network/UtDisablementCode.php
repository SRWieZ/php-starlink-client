<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/satellites/network/ut_disablement_codes.proto

namespace SpaceX\API\Satellites\Network;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Satellites.Network.UtDisablementCode</code>
 */
class UtDisablementCode
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_STATE = 0;</code>
     */
    const UNKNOWN_STATE = 0;

    /**
     * Generated from protobuf enum <code>OKAY = 1;</code>
     */
    const OKAY = 1;

    /**
     * Generated from protobuf enum <code>NO_ACTIVE_ACCOUNT = 2;</code>
     */
    const NO_ACTIVE_ACCOUNT = 2;

    /**
     * Generated from protobuf enum <code>TOO_FAR_FROM_SERVICE_ADDRESS = 3;</code>
     */
    const TOO_FAR_FROM_SERVICE_ADDRESS = 3;

    /**
     * Generated from protobuf enum <code>IN_OCEAN = 4;</code>
     */
    const IN_OCEAN = 4;

    /**
     * Generated from protobuf enum <code>INVALID_COUNTRY = 5;</code>
     */
    const INVALID_COUNTRY = 5;

    /**
     * Generated from protobuf enum <code>BLOCKED_COUNTRY = 6;</code>
     */
    const BLOCKED_COUNTRY = 6;

    /**
     * Generated from protobuf enum <code>DATA_OVERAGE_SANDBOX_POLICY = 7;</code>
     */
    const DATA_OVERAGE_SANDBOX_POLICY = 7;

    /**
     * Generated from protobuf enum <code>CELL_IS_DISABLED = 8;</code>
     */
    const CELL_IS_DISABLED = 8;

    /**
     * Generated from protobuf enum <code>ROAM_RESTRICTED = 10;</code>
     */
    const ROAM_RESTRICTED = 10;

    /**
     * Generated from protobuf enum <code>UNKNOWN_LOCATION = 11;</code>
     */
    const UNKNOWN_LOCATION = 11;

    /**
     * Generated from protobuf enum <code>ACCOUNT_DISABLED = 12;</code>
     */
    const ACCOUNT_DISABLED = 12;

    private static $valueToName = [
        self::UNKNOWN_STATE => 'UNKNOWN_STATE',
        self::OKAY => 'OKAY',
        self::NO_ACTIVE_ACCOUNT => 'NO_ACTIVE_ACCOUNT',
        self::TOO_FAR_FROM_SERVICE_ADDRESS => 'TOO_FAR_FROM_SERVICE_ADDRESS',
        self::IN_OCEAN => 'IN_OCEAN',
        self::INVALID_COUNTRY => 'INVALID_COUNTRY',
        self::BLOCKED_COUNTRY => 'BLOCKED_COUNTRY',
        self::DATA_OVERAGE_SANDBOX_POLICY => 'DATA_OVERAGE_SANDBOX_POLICY',
        self::CELL_IS_DISABLED => 'CELL_IS_DISABLED',
        self::ROAM_RESTRICTED => 'ROAM_RESTRICTED',
        self::UNKNOWN_LOCATION => 'UNKNOWN_LOCATION',
        self::ACCOUNT_DISABLED => 'ACCOUNT_DISABLED',
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
