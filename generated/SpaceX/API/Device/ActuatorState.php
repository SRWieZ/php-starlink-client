<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/dish.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.ActuatorState</code>
 */
class ActuatorState
{
    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_IDLE = 0;</code>
     */
    const ACTUATOR_STATE_IDLE = 0;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_FULL_TILT = 1;</code>
     */
    const ACTUATOR_STATE_FULL_TILT = 1;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_ROTATE = 2;</code>
     */
    const ACTUATOR_STATE_ROTATE = 2;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_TILT = 3;</code>
     */
    const ACTUATOR_STATE_TILT = 3;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_UNWRAP_POSITIVE = 4;</code>
     */
    const ACTUATOR_STATE_UNWRAP_POSITIVE = 4;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_UNWRAP_NEGATIVE = 5;</code>
     */
    const ACTUATOR_STATE_UNWRAP_NEGATIVE = 5;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_TILT_TO_STOWED = 6;</code>
     */
    const ACTUATOR_STATE_TILT_TO_STOWED = 6;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_FAULTED = 7;</code>
     */
    const ACTUATOR_STATE_FAULTED = 7;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_WAIT_TIL_STATIC = 8;</code>
     */
    const ACTUATOR_STATE_WAIT_TIL_STATIC = 8;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_DRIVE_TO_MOBILE_POSITION = 9;</code>
     */
    const ACTUATOR_STATE_DRIVE_TO_MOBILE_POSITION = 9;

    /**
     * Generated from protobuf enum <code>ACTUATOR_STATE_MOBILE_WAIT = 10;</code>
     */
    const ACTUATOR_STATE_MOBILE_WAIT = 10;

    private static $valueToName = [
        self::ACTUATOR_STATE_IDLE => 'ACTUATOR_STATE_IDLE',
        self::ACTUATOR_STATE_FULL_TILT => 'ACTUATOR_STATE_FULL_TILT',
        self::ACTUATOR_STATE_ROTATE => 'ACTUATOR_STATE_ROTATE',
        self::ACTUATOR_STATE_TILT => 'ACTUATOR_STATE_TILT',
        self::ACTUATOR_STATE_UNWRAP_POSITIVE => 'ACTUATOR_STATE_UNWRAP_POSITIVE',
        self::ACTUATOR_STATE_UNWRAP_NEGATIVE => 'ACTUATOR_STATE_UNWRAP_NEGATIVE',
        self::ACTUATOR_STATE_TILT_TO_STOWED => 'ACTUATOR_STATE_TILT_TO_STOWED',
        self::ACTUATOR_STATE_FAULTED => 'ACTUATOR_STATE_FAULTED',
        self::ACTUATOR_STATE_WAIT_TIL_STATIC => 'ACTUATOR_STATE_WAIT_TIL_STATIC',
        self::ACTUATOR_STATE_DRIVE_TO_MOBILE_POSITION => 'ACTUATOR_STATE_DRIVE_TO_MOBILE_POSITION',
        self::ACTUATOR_STATE_MOBILE_WAIT => 'ACTUATOR_STATE_MOBILE_WAIT',
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
