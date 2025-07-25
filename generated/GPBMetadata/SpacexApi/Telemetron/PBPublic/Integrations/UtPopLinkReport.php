<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/telemetron/public/integrations/ut_pop_link_report.proto

namespace GPBMetadata\SpacexApi\Telemetron\PBPublic\Integrations;

class UtPopLinkReport
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        \GPBMetadata\SpacexApi\Telemetron\PBPublic\Common\Time::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xF5\x09\x0ABspacex_api/telemetron/public/integrations/ut_pop_link_report.proto\x12)SpaceX.API.Telemetron.Public.Integrations\"\xE7\x02\x0A\x0FUtPoPLinkReport\x12^\x0A\x0Eslot_timestamp\x18\x01 \x01(\x0B22.SpaceX.API.Telemetron.Public.Common.TimestampInfoH\x00R\x0DslotTimestamp\x88\x01\x01\x12\x1A\x0A\x06pop_id\x18\x02 \x01(\x0DH\x01R\x05popId\x88\x01\x01\x12#\x0A\x0Bpop_rack_id\x18\x03 \x01(\x0DH\x02R\x09popRackId\x88\x01\x01\x12O\x0A\x05stats\x18\x04 \x03(\x0B29.SpaceX.API.Telemetron.Public.Integrations.UtPoPLinkStatsR\x05stats\x12\$\x0A\x0Bpop_version\x18\x05 \x01(\x09H\x03R\x0ApopVersion\x88\x01\x01B\x11\x0A\x0F_slot_timestampB\x09\x0A\x07_pop_idB\x0E\x0A\x0C_pop_rack_idB\x0E\x0A\x0C_pop_version\"\xEC\x04\x0A\x0EUtPoPLinkStats\x12l\x0A\x15measurement_timestamp\x18\x01 \x01(\x0B22.SpaceX.API.Telemetron.Public.Common.TimestampInfoH\x00R\x14measurementTimestamp\x88\x01\x01\x12\x18\x0A\x05ut_id\x18\x02 \x01(\x09H\x01R\x04utId\x88\x01\x01\x12(\x0A\x0Epop_rx_sdu_cnt\x18\x03 \x01(\x03H\x02R\x0BpopRxSduCnt\x88\x01\x01\x12%\x0A\x0Csdu_loss_cnt\x18\x04 \x01(\x03H\x03R\x0AsduLossCnt\x88\x01\x01\x126\x0A\x15uplink_bytes_last_15s\x18\x05 \x01(\x04H\x04R\x12uplinkBytesLast15s\x88\x01\x01\x12:\x0A\x17downlink_bytes_last_15s\x18\x06 \x01(\x04H\x05R\x14downlinkBytesLast15s\x88\x01\x01\x12_\x0A+uplink_cplane_acl_other_violations_last_15s\x18\x07 \x01(\x04H\x06R%uplinkCplaneAclOtherViolationsLast15s\x88\x01\x01B\x18\x0A\x16_measurement_timestampB\x08\x0A\x06_ut_idB\x11\x0A\x0F_pop_rx_sdu_cntB\x0F\x0A\x0D_sdu_loss_cntB\x18\x0A\x16_uplink_bytes_last_15sB\x1A\x0A\x18_downlink_bytes_last_15sB.\x0A,_uplink_cplane_acl_other_violations_last_15s*h\x0A\x0FRateLimitReason\x12\x0B\x0A\x07UNKNOWN\x10\x00\x12\x0C\x0A\x08NO_LIMIT\x10\x01\x12\x10\x0A\x0CPOLICY_LIMIT\x10\x02\x12\x15\x0A\x11USER_CUSTOM_LIMIT\x10\x03\x12\x11\x0A\x0DOVERAGE_LIMIT\x10\x05B9Z7spacex.com/api/telemetron/public/integrations/utpoplinkb\x06proto3", true);

        static::$is_initialized = true;
    }
}
