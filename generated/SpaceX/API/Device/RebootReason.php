<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.RebootReason</code>
 */
class RebootReason
{
    /**
     * Generated from protobuf enum <code>REBOOT_REASON_NONE = 0;</code>
     */
    const REBOOT_REASON_NONE = 0;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_MANUAL = 1;</code>
     */
    const REBOOT_REASON_MANUAL = 1;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_LOSS_OF_COMM = 2;</code>
     */
    const REBOOT_REASON_LOSS_OF_COMM = 2;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_SWUPDATE_NOW = 3;</code>
     */
    const REBOOT_REASON_SWUPDATE_NOW = 3;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_SWUPDATE_SCHEDULED = 4;</code>
     */
    const REBOOT_REASON_SWUPDATE_SCHEDULED = 4;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_APP = 5;</code>
     */
    const REBOOT_REASON_APP = 5;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_EMC = 6;</code>
     */
    const REBOOT_REASON_EMC = 6;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_FACTORY_RESET = 7;</code>
     */
    const REBOOT_REASON_FACTORY_RESET = 7;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_TEST_CASE = 8;</code>
     */
    const REBOOT_REASON_TEST_CASE = 8;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_THERMAL_POWER_CUT = 9;</code>
     */
    const REBOOT_REASON_THERMAL_POWER_CUT = 9;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_CRITICAL_PROCESS_DIED = 10;</code>
     */
    const REBOOT_REASON_CRITICAL_PROCESS_DIED = 10;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_NO_RF_READY = 11;</code>
     */
    const REBOOT_REASON_NO_RF_READY = 11;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_POSTPONED_LOSS_OF_COMM = 12;</code>
     */
    const REBOOT_REASON_POSTPONED_LOSS_OF_COMM = 12;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_SWUPDATE_STATIONARY = 13;</code>
     */
    const REBOOT_REASON_SWUPDATE_STATIONARY = 13;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_AAP_CRASH = 14;</code>
     */
    const REBOOT_REASON_AAP_CRASH = 14;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_XP70_SACS = 15;</code>
     */
    const REBOOT_REASON_XP70_SACS = 15;

    /**
     * Generated from protobuf enum <code>REBOOT_REASON_INE_FAILED = 16;</code>
     */
    const REBOOT_REASON_INE_FAILED = 16;

    private static $valueToName = [
        self::REBOOT_REASON_NONE => 'REBOOT_REASON_NONE',
        self::REBOOT_REASON_MANUAL => 'REBOOT_REASON_MANUAL',
        self::REBOOT_REASON_LOSS_OF_COMM => 'REBOOT_REASON_LOSS_OF_COMM',
        self::REBOOT_REASON_SWUPDATE_NOW => 'REBOOT_REASON_SWUPDATE_NOW',
        self::REBOOT_REASON_SWUPDATE_SCHEDULED => 'REBOOT_REASON_SWUPDATE_SCHEDULED',
        self::REBOOT_REASON_APP => 'REBOOT_REASON_APP',
        self::REBOOT_REASON_EMC => 'REBOOT_REASON_EMC',
        self::REBOOT_REASON_FACTORY_RESET => 'REBOOT_REASON_FACTORY_RESET',
        self::REBOOT_REASON_TEST_CASE => 'REBOOT_REASON_TEST_CASE',
        self::REBOOT_REASON_THERMAL_POWER_CUT => 'REBOOT_REASON_THERMAL_POWER_CUT',
        self::REBOOT_REASON_CRITICAL_PROCESS_DIED => 'REBOOT_REASON_CRITICAL_PROCESS_DIED',
        self::REBOOT_REASON_NO_RF_READY => 'REBOOT_REASON_NO_RF_READY',
        self::REBOOT_REASON_POSTPONED_LOSS_OF_COMM => 'REBOOT_REASON_POSTPONED_LOSS_OF_COMM',
        self::REBOOT_REASON_SWUPDATE_STATIONARY => 'REBOOT_REASON_SWUPDATE_STATIONARY',
        self::REBOOT_REASON_AAP_CRASH => 'REBOOT_REASON_AAP_CRASH',
        self::REBOOT_REASON_XP70_SACS => 'REBOOT_REASON_XP70_SACS',
        self::REBOOT_REASON_INE_FAILED => 'REBOOT_REASON_INE_FAILED',
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
