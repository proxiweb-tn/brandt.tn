<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/money.proto

namespace GPBMetadata\Google\Type;

class Money
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
google/type/money.protogoogle.type"<
Money
currency_code (	
units (
nanos (B`
com.google.typeB
MoneyProtoPZ6google.golang.org/genproto/googleapis/type/money;money��GTPbproto3'
        , true);

        static::$is_initialized = true;
    }
}

