<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/extension_setting_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class ExtensionSettingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v13/errors/extension_setting_error.protogoogle.ads.googleads.v13.errors"�
ExtensionSettingErrorEnum"�
ExtensionSettingError
UNSPECIFIED 
UNKNOWN
EXTENSIONS_REQUIRED%
!FEED_TYPE_EXTENSION_TYPE_MISMATCH
INVALID_FEED_TYPE4
0INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING%
!CANNOT_CHANGE_FEED_ITEM_ON_CREATE)
%CANNOT_UPDATE_NEWLY_CREATED_EXTENSION3
/NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE3
/NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE	3
/NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE
-
)AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS-
)CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS-
)CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS5
1AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE5
1CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE5
1CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE
VALUE_OUT_OF_RANGE$
 CANNOT_SET_FIELD_WITH_FINAL_URLS
FINAL_URLS_NOT_SET
INVALID_PHONE_NUMBER*
&PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY-
)CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED#
PREMIUM_RATE_NUMBER_NOT_ALLOWED
DISALLOWED_NUMBER_TYPE(
$INVALID_DOMESTIC_PHONE_NUMBER_FORMAT#
VANITY_PHONE_NUMBER_NOT_ALLOWED
INVALID_COUNTRY_CODE#
INVALID_CALL_CONVERSION_TYPE_ID.
*CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKINGE*
&CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY
INVALID_APP_ID&
"QUOTES_IN_REVIEW_EXTENSION_SNIPPET \'
#HYPHENS_IN_REVIEW_EXTENSION_SNIPPET!(
$REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE"(
$SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT#
MISSING_FIELD$
INCONSISTENT_CURRENCY_CODES%*
&PRICE_EXTENSION_HAS_DUPLICATED_HEADERS&4
0PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION\'%
!PRICE_EXTENSION_HAS_TOO_FEW_ITEMS(&
"PRICE_EXTENSION_HAS_TOO_MANY_ITEMS)
UNSUPPORTED_VALUE*
INVALID_DEVICE_PREFERENCE+
INVALID_SCHEDULE_END-*
&DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE/%
!OVERLAPPING_SCHEDULES_NOT_ALLOWED0 
SCHEDULE_END_NOT_AFTER_START1
TOO_MANY_SCHEDULES_PER_DAY2&
"DUPLICATE_EXTENSION_FEED_ITEM_EDIT3
INVALID_SNIPPETS_HEADER4<
8PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY5
CAMPAIGN_TARGETING_MISMATCH6"
CANNOT_OPERATE_ON_REMOVED_FEED7
EXTENSION_TYPE_REQUIRED8-
)INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION9
START_DATE_AFTER_END_DATE:
INVALID_PRICE_FORMAT;
PROMOTION_INVALID_TIME<<
8PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT=>
:PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT>%
!TOO_MANY_DECIMAL_PLACES_SPECIFIED?
INVALID_LANGUAGE_CODE@
UNSUPPORTED_LANGUAGEA0
,CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIREDB&
"EXTENSION_SETTING_UPDATE_IS_A_NOOPC
DISALLOWED_TEXTDB�
#com.google.ads.googleads.v13.errorsBExtensionSettingErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

