<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex/api/common/status/status.proto

namespace GPBMetadata\Spacex\Api\Common\Status;

class Status
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xB2\x01\x0A%spacex/api/common/status/status.proto\x12\x11SpaceX.API.Status\"U\x0A\x06Status\x12\x17\x0A\x04code\x18\x01 \x01(\x05H\x00R\x04code\x88\x01\x01\x12\x1D\x0A\x07message\x18\x02 \x01(\x09H\x01R\x07message\x88\x01\x01B\x07\x0A\x05_codeB\x0A\x0A\x08_messageB\x17Z\x15spacex.com/api/statusb\x06proto3", true);

        static::$is_initialized = true;
    }
}
