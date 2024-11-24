<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/device/wifi_util.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.Protocol</code>
 */
class Protocol
{
    /**
     * Generated from protobuf enum <code>TCP = 0;</code>
     */
    const TCP = 0;

    /**
     * Generated from protobuf enum <code>UDP = 1;</code>
     */
    const UDP = 1;

    /**
     * Generated from protobuf enum <code>TLS = 2;</code>
     */
    const TLS = 2;

    /**
     * Generated from protobuf enum <code>DTLS = 3;</code>
     */
    const DTLS = 3;

    private static $valueToName = [
        self::TCP => 'TCP',
        self::UDP => 'UDP',
        self::TLS => 'TLS',
        self::DTLS => 'DTLS',
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
