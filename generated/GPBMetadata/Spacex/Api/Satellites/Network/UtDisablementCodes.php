<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/satellites/network/ut_disablement_codes.proto

namespace GPBMetadata\Spacex\Api\Satellites\Network;

class UtDisablementCodes
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xD2\x03\x0A8spacex/api/satellites/network/ut_disablement_codes.proto\x12\x1DSpaceX.API.Satellites.Network*\x9D\x02\x0A\x11UtDisablementCode\x12\x11\x0A\x0DUNKNOWN_STATE\x10\x00\x12\x08\x0A\x04OKAY\x10\x01\x12\x15\x0A\x11NO_ACTIVE_ACCOUNT\x10\x02\x12 \x0A\x1CTOO_FAR_FROM_SERVICE_ADDRESS\x10\x03\x12\x0C\x0A\x08IN_OCEAN\x10\x04\x12\x13\x0A\x0FBLOCKED_COUNTRY\x10\x06\x12\x1F\x0A\x1BDATA_OVERAGE_SANDBOX_POLICY\x10\x07\x12\x14\x0A\x10CELL_IS_DISABLED\x10\x08\x12\x13\x0A\x0FROAM_RESTRICTED\x10\x0A\x12\x14\x0A\x10UNKNOWN_LOCATION\x10\x0B\x12\x14\x0A\x10ACCOUNT_DISABLED\x10\x0C\x12\x17\x0A\x13UNSUPPORTED_VERSION\x10\x0D*O\x0A\x18AccountDisablementReason\x12\x12\x0A\x0ENO_RESTRICTION\x10\x00\x12\x1F\x0A\x1BKNOW_YOUR_CUSTOMER_REQUIRED\x10\x01b\x06proto3", true);

        static::$is_initialized = true;
    }
}
