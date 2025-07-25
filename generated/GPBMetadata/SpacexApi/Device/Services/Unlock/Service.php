<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/services/unlock/service.proto

namespace GPBMetadata\SpacexApi\Device\Services\Unlock;

class Service
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x9B\x08\x0A/spacex_api/device/services/unlock/service.proto\x12!SpaceX.API.Device.Services.Unlock\"\xBF\x02\x0A\x0FUnlockChallenge\x12 \x0A\x09device_id\x18\x01 \x01(\x09H\x00R\x08deviceId\x88\x01\x01\x12\x19\x0A\x05nonce\x18\x02 \x01(\x0CH\x01R\x05nonce\x88\x01\x01\x12 \x0A\x09sign_spki\x18\x04 \x01(\x0CH\x02R\x08signSpki\x88\x01\x01\x12(\x0A\x0Dgrant_keydata\x18\x05 \x01(\x09H\x03R\x0CgrantKeydata\x88\x01\x01\x12,\x0A\x0Fservice_keydata\x18\x06 \x01(\x09H\x04R\x0EserviceKeydata\x88\x01\x01\x12)\x0A\x10authority_grants\x18\x07 \x03(\x09R\x0FauthorityGrantsB\x0C\x0A\x0A_device_idB\x08\x0A\x06_nonceB\x0C\x0A\x0A_sign_spkiB\x10\x0A\x0E_grant_keydataB\x12\x0A\x10_service_keydata\"\x14\x0A\x12StartUnlockRequest\"\x9A\x01\x0A\x13StartUnlockResponse\x12 \x0A\x09device_id\x18\x01 \x01(\x09H\x00R\x08deviceId\x88\x01\x01\x12\x19\x0A\x05nonce\x18\x02 \x01(\x0CH\x01R\x05nonce\x88\x01\x01\x12 \x0A\x09sign_spki\x18\x03 \x01(\x0CH\x02R\x08signSpki\x88\x01\x01B\x0C\x0A\x0A_device_idB\x08\x0A\x06_nonceB\x0C\x0A\x0A_sign_spki\"w\x0A\x13FinishUnlockRequest\x12!\x0A\x09challenge\x18\x01 \x01(\x0CH\x00R\x09challenge\x88\x01\x01\x12!\x0A\x09signature\x18\x02 \x01(\x0CH\x01R\x09signature\x88\x01\x01B\x0C\x0A\x0A_challengeB\x0C\x0A\x0A_signature\">\x0A\x14FinishUnlockResponse\x12\x1B\x0A\x06status\x18\x01 \x01(\x0DH\x00R\x06status\x88\x01\x01B\x09\x0A\x07_status2\x8E\x02\x0A\x0DUnlockService\x12|\x0A\x0BStartUnlock\x125.SpaceX.API.Device.Services.Unlock.StartUnlockRequest\x1A6.SpaceX.API.Device.Services.Unlock.StartUnlockResponse\x12\x7F\x0A\x0CFinishUnlock\x126.SpaceX.API.Device.Services.Unlock.FinishUnlockRequest\x1A7.SpaceX.API.Device.Services.Unlock.FinishUnlockResponseb\x06proto3", true);

        static::$is_initialized = true;
    }
}
