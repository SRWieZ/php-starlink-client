<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/common.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.BootReason</code>
 */
class BootReason
{
    /**
     * Generated from protobuf enum <code>BOOT_REASON_UNKNOWN = 0;</code>
     */
    const BOOT_REASON_UNKNOWN = 0;

    /**
     * Generated from protobuf enum <code>FORGOTTEN = 1;</code>
     */
    const FORGOTTEN = 1;

    /**
     * Generated from protobuf enum <code>POWER_CYCLE = 2;</code>
     */
    const POWER_CYCLE = 2;

    /**
     * Generated from protobuf enum <code>COMMAND = 3;</code>
     */
    const COMMAND = 3;

    /**
     * Generated from protobuf enum <code>SOFTWARE_UPDATE = 4;</code>
     */
    const SOFTWARE_UPDATE = 4;

    /**
     * Generated from protobuf enum <code>CONFIG_UPDATE = 5;</code>
     */
    const CONFIG_UPDATE = 5;

    /**
     * Generated from protobuf enum <code>UPTIME_FDIR = 6;</code>
     */
    const UPTIME_FDIR = 6;

    /**
     * Generated from protobuf enum <code>REPEATER_FDIR = 7;</code>
     */
    const REPEATER_FDIR = 7;

    /**
     * Generated from protobuf enum <code>AVIATION_ETH_WAN_FDIR = 8;</code>
     */
    const AVIATION_ETH_WAN_FDIR = 8;

    /**
     * Generated from protobuf enum <code>KERNEL_PANIC = 9;</code>
     */
    const KERNEL_PANIC = 9;

    /**
     * Generated from protobuf enum <code>INTENTIONAL_KERNEL_PANIC = 14;</code>
     */
    const INTENTIONAL_KERNEL_PANIC = 14;

    /**
     * Generated from protobuf enum <code>MCU_BRINGUP_FAILED_FDIR = 11;</code>
     */
    const MCU_BRINGUP_FAILED_FDIR = 11;

    /**
     * Generated from protobuf enum <code>AVIATION_OUTAGE_FDIR = 12;</code>
     */
    const AVIATION_OUTAGE_FDIR = 12;

    /**
     * Generated from protobuf enum <code>SOFTWARE_WATCHDOG = 13;</code>
     */
    const SOFTWARE_WATCHDOG = 13;

    /**
     * Generated from protobuf enum <code>HARDWARE_WATCHDOG = 15;</code>
     */
    const HARDWARE_WATCHDOG = 15;

    private static $valueToName = [
        self::BOOT_REASON_UNKNOWN => 'BOOT_REASON_UNKNOWN',
        self::FORGOTTEN => 'FORGOTTEN',
        self::POWER_CYCLE => 'POWER_CYCLE',
        self::COMMAND => 'COMMAND',
        self::SOFTWARE_UPDATE => 'SOFTWARE_UPDATE',
        self::CONFIG_UPDATE => 'CONFIG_UPDATE',
        self::UPTIME_FDIR => 'UPTIME_FDIR',
        self::REPEATER_FDIR => 'REPEATER_FDIR',
        self::AVIATION_ETH_WAN_FDIR => 'AVIATION_ETH_WAN_FDIR',
        self::KERNEL_PANIC => 'KERNEL_PANIC',
        self::INTENTIONAL_KERNEL_PANIC => 'INTENTIONAL_KERNEL_PANIC',
        self::MCU_BRINGUP_FAILED_FDIR => 'MCU_BRINGUP_FAILED_FDIR',
        self::AVIATION_OUTAGE_FDIR => 'AVIATION_OUTAGE_FDIR',
        self::SOFTWARE_WATCHDOG => 'SOFTWARE_WATCHDOG',
        self::HARDWARE_WATCHDOG => 'HARDWARE_WATCHDOG',
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
