<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/header_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class HeaderError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v13/errors/header_error.protogoogle.ads.googleads.v13.errors"}
HeaderErrorEnum"j
HeaderError
UNSPECIFIED 
UNKNOWN
INVALID_LOGIN_CUSTOMER_ID
INVALID_LINKED_CUSTOMER_IDB�
#com.google.ads.googleads.v13.errorsBHeaderErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

