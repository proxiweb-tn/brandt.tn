<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/conversion_value_rule_set_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class ConversionValueRuleSetError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Egoogle/ads/googleads/v13/errors/conversion_value_rule_set_error.protogoogle.ads.googleads.v13.errors"�
ConversionValueRuleSetErrorEnum"�
ConversionValueRuleSetError
UNSPECIFIED 
UNKNOWN%
!CONFLICTING_VALUE_RULE_CONDITIONS
INVALID_VALUE_RULE\'
#DIMENSIONS_UPDATE_ONLY_ALLOW_APPEND
CONDITION_TYPE_NOT_ALLOWED
DUPLICATE_DIMENSIONS
INVALID_CAMPAIGN_ID2
.CANNOT_PAUSE_UNLESS_ALL_VALUE_RULES_ARE_PAUSED0
,SHOULD_PAUSE_WHEN_ALL_VALUE_RULES_ARE_PAUSED	/
+VALUE_RULES_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE
+
\'INELIGIBLE_CONVERSION_ACTION_CATEGORIES5
1DIMENSION_NO_CONDITION_USED_WITH_OTHER_DIMENSIONS&
"DIMENSION_NO_CONDITION_NOT_ALLOWED,
(UNSUPPORTED_CONVERSION_ACTION_CATEGORIESB�
#com.google.ads.googleads.v13.errorsB ConversionValueRuleSetErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

