<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/date_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class DateError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
0google/ads/googleads/v13/errors/date_error.protogoogle.ads.googleads.v13.errors"�
DateErrorEnum"�
	DateError
UNSPECIFIED 
UNKNOWN 
INVALID_FIELD_VALUES_IN_DATE%
!INVALID_FIELD_VALUES_IN_DATE_TIME
INVALID_STRING_DATE#
INVALID_STRING_DATE_TIME_MICROS$
 INVALID_STRING_DATE_TIME_SECONDS0
,INVALID_STRING_DATE_TIME_SECONDS_WITH_OFFSET
EARLIER_THAN_MINIMUM_DATE
LATER_THAN_MAXIMUM_DATE3
/DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE	2
.DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL
B�
#com.google.ads.googleads.v13.errorsBDateErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

