<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/ad_type_infos.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Common;

class AdTypeInfos
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Xgoogle/ads/googleads/v13/enums/policy_topic_evidence_destination_mismatch_url_type.protogoogle.ads.googleads.v13.enums"�
1PolicyTopicEvidenceDestinationMismatchUrlTypeEnum"�
-PolicyTopicEvidenceDestinationMismatchUrlType
UNSPECIFIED 
UNKNOWN
DISPLAY_URL
	FINAL_URL
FINAL_MOBILE_URL
TRACKING_URL
MOBILE_TRACKING_URLB�
"com.google.ads.googleads.v13.enumsB2PolicyTopicEvidenceDestinationMismatchUrlTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
<google/ads/googleads/v13/enums/policy_topic_entry_type.protogoogle.ads.googleads.v13.enums"�
PolicyTopicEntryTypeEnum"�
PolicyTopicEntryType
UNSPECIFIED 
UNKNOWN

PROHIBITED
LIMITED
FULLY_LIMITED
DESCRIPTIVE

BROADENING
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v13.enumsBPolicyTopicEntryTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Ygoogle/ads/googleads/v13/enums/policy_topic_evidence_destination_not_working_device.protogoogle.ads.googleads.v13.enums"�
2PolicyTopicEvidenceDestinationNotWorkingDeviceEnum"q
.PolicyTopicEvidenceDestinationNotWorkingDevice
UNSPECIFIED 
UNKNOWN
DESKTOP
ANDROID
IOSB�
"com.google.ads.googleads.v13.enumsB3PolicyTopicEvidenceDestinationNotWorkingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
agoogle/ads/googleads/v13/enums/policy_topic_evidence_destination_not_working_dns_error_type.protogoogle.ads.googleads.v13.enums"�
8PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum"�
4PolicyTopicEvidenceDestinationNotWorkingDnsErrorType
UNSPECIFIED 
UNKNOWN
HOSTNAME_NOT_FOUND
GOOGLE_CRAWLER_DNS_ISSUEB�
"com.google.ads.googleads.v13.enumsB9PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
,google/ads/googleads/v13/common/policy.protogoogle.ads.googleads.v13.commonXgoogle/ads/googleads/v13/enums/policy_topic_evidence_destination_mismatch_url_type.protoYgoogle/ads/googleads/v13/enums/policy_topic_evidence_destination_not_working_device.protoagoogle/ads/googleads/v13/enums/policy_topic_evidence_destination_not_working_dns_error_type.proto"n
PolicyViolationKey
policy_name (	H �
violating_text (	H�B
_policy_nameB
_violating_text"�
PolicyValidationParameter
ignorable_policy_topics (	Y
exempt_policy_violation_keys (23.google.ads.googleads.v13.common.PolicyViolationKey"�
PolicyTopicEntry
topic (	H �[
type (2M.google.ads.googleads.v13.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryTypeG
	evidences (24.google.ads.googleads.v13.common.PolicyTopicEvidenceK
constraints (26.google.ads.googleads.v13.common.PolicyTopicConstraintB
_topic"�

PolicyTopicEvidenceX
website_list (2@.google.ads.googleads.v13.common.PolicyTopicEvidence.WebsiteListH R
	text_list (2=.google.ads.googleads.v13.common.PolicyTopicEvidence.TextListH 
language_code	 (	H i
destination_text_list (2H.google.ads.googleads.v13.common.PolicyTopicEvidence.DestinationTextListH h
destination_mismatch (2H.google.ads.googleads.v13.common.PolicyTopicEvidence.DestinationMismatchH m
destination_not_working (2J.google.ads.googleads.v13.common.PolicyTopicEvidence.DestinationNotWorkingH 
TextList
texts (	
WebsiteList
websites (	0
DestinationTextList
destination_texts (	�
DestinationMismatch�
	url_types (2.google.ads.googleads.v13.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType�
DestinationNotWorking
expanded_url (	H��
device (2�.google.ads.googleads.v13.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice#
last_checked_date_time (	H��
dns_error_type (2�.google.ads.googleads.v13.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeH 
http_error_code (H B
reasonB
_expanded_urlB
_last_checked_date_timeB
value"�
PolicyTopicConstrainto
country_constraint_list (2L.google.ads.googleads.v13.common.PolicyTopicConstraint.CountryConstraintListH h
reseller_constraint (2I.google.ads.googleads.v13.common.PolicyTopicConstraint.ResellerConstraintH {
#certificate_missing_in_country_list (2L.google.ads.googleads.v13.common.PolicyTopicConstraint.CountryConstraintListH �
+certificate_domain_mismatch_in_country_list (2L.google.ads.googleads.v13.common.PolicyTopicConstraint.CountryConstraintListH �
CountryConstraintList%
total_targeted_countries (H �[
	countries (2H.google.ads.googleads.v13.common.PolicyTopicConstraint.CountryConstraintB
_total_targeted_countries
ResellerConstraintI
CountryConstraint
country_criterion (	H �B
_country_criterionB
valueB�
#com.google.ads.googleads.v13.commonBPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/common;common�GAA�Google.Ads.GoogleAds.V13.Common�Google\\Ads\\GoogleAds\\V13\\Common�#Google::Ads::GoogleAds::V13::Commonbproto3
�
>google/ads/googleads/v13/enums/asset_link_primary_status.protogoogle.ads.googleads.v13.enums"�
AssetLinkPrimaryStatusEnum"�
AssetLinkPrimaryStatus
UNSPECIFIED 
UNKNOWN
ELIGIBLE

PAUSED
REMOVED
PENDING
LIMITED
NOT_ELIGIBLEB�
"com.google.ads.googleads.v13.enumsBAssetLinkPrimaryStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Kgoogle/ads/googleads/v13/enums/asset_offline_evaluation_error_reasons.protogoogle.ads.googleads.v13.enums"�
&AssetOfflineEvaluationErrorReasonsEnum"�
"AssetOfflineEvaluationErrorReasons
UNSPECIFIED 
UNKNOWN.
*PRICE_ASSET_DESCRIPTION_REPEATS_ROW_HEADER"
PRICE_ASSET_REPETITIVE_HEADERS3
/PRICE_ASSET_HEADER_INCOMPATIBLE_WITH_PRICE_TYPE9
5PRICE_ASSET_DESCRIPTION_INCOMPATIBLE_WITH_ITEM_HEADER/
+PRICE_ASSET_DESCRIPTION_HAS_PRICE_QUALIFIER$
 PRICE_ASSET_UNSUPPORTED_LANGUAGE
PRICE_ASSET_OTHER_ERRORB�
"com.google.ads.googleads.v13.enumsB\'AssetOfflineEvaluationErrorReasonsProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Egoogle/ads/googleads/v13/enums/asset_link_primary_status_reason.protogoogle.ads.googleads.v13.enums"�
 AssetLinkPrimaryStatusReasonEnum"�
AssetLinkPrimaryStatusReason
UNSPECIFIED 
UNKNOWN
ASSET_LINK_PAUSED
ASSET_LINK_REMOVED
ASSET_DISAPPROVED
ASSET_UNDER_REVIEW
ASSET_APPROVED_LABELEDB�
"com.google.ads.googleads.v13.enumsB!AssetLinkPrimaryStatusReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
;google/ads/googleads/v13/enums/policy_approval_status.protogoogle.ads.googleads.v13.enums"�
PolicyApprovalStatusEnum"�
PolicyApprovalStatus
UNSPECIFIED 
UNKNOWN
DISAPPROVED
APPROVED_LIMITED
APPROVED
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v13.enumsBPolicyApprovalStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
9google/ads/googleads/v13/enums/policy_review_status.protogoogle.ads.googleads.v13.enums"�
PolicyReviewStatusEnum"�
PolicyReviewStatus
UNSPECIFIED 
UNKNOWN
REVIEW_IN_PROGRESS
REVIEWED
UNDER_APPEAL
ELIGIBLE_MAY_SERVEB�
"com.google.ads.googleads.v13.enumsBPolicyReviewStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
2google/ads/googleads/v13/common/asset_policy.protogoogle.ads.googleads.v13.common>google/ads/googleads/v13/enums/asset_link_primary_status.protoEgoogle/ads/googleads/v13/enums/asset_link_primary_status_reason.protoKgoogle/ads/googleads/v13/enums/asset_offline_evaluation_error_reasons.proto;google/ads/googleads/v13/enums/policy_approval_status.proto9google/ads/googleads/v13/enums/policy_review_status.proto"�
AdAssetPolicySummaryO
policy_topic_entries (21.google.ads.googleads.v13.common.PolicyTopicEntry`
review_status (2I.google.ads.googleads.v13.enums.PolicyReviewStatusEnum.PolicyReviewStatusf
approval_status (2M.google.ads.googleads.v13.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus"�
AssetLinkPrimaryStatusDetailsr
reason (2].google.ads.googleads.v13.enums.AssetLinkPrimaryStatusReasonEnum.AssetLinkPrimaryStatusReasonH�f
status (2Q.google.ads.googleads.v13.enums.AssetLinkPrimaryStatusEnum.AssetLinkPrimaryStatusH�N
asset_disapproved (21.google.ads.googleads.v13.common.AssetDisapprovedH B	
detailsB	
_reasonB	
_status"�
AssetDisapproved�
 offline_evaluation_error_reasons (2i.google.ads.googleads.v13.enums.AssetOfflineEvaluationErrorReasonsEnum.AssetOfflineEvaluationErrorReasonsB�
#com.google.ads.googleads.v13.commonBAssetPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/common;common�GAA�Google.Ads.GoogleAds.V13.Common�Google\\Ads\\GoogleAds\\V13\\Common�#Google::Ads::GoogleAds::V13::Commonbproto3
�
<google/ads/googleads/v13/enums/asset_performance_label.protogoogle.ads.googleads.v13.enums"�
AssetPerformanceLabelEnum"m
AssetPerformanceLabel
UNSPECIFIED 
UNKNOWN
PENDING
LEARNING
LOW
GOOD
BESTB�
"com.google.ads.googleads.v13.enumsBAssetPerformanceLabelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
<google/ads/googleads/v13/enums/served_asset_field_type.protogoogle.ads.googleads.v13.enums"�
ServedAssetFieldTypeEnum"�
ServedAssetFieldType
UNSPECIFIED 
UNKNOWN

HEADLINE_1

HEADLINE_2

HEADLINE_3
DESCRIPTION_1
DESCRIPTION_2B�
"com.google.ads.googleads.v13.enumsBServedAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
.google/ads/googleads/v13/common/ad_asset.protogoogle.ads.googleads.v13.common<google/ads/googleads/v13/enums/asset_performance_label.proto<google/ads/googleads/v13/enums/served_asset_field_type.proto"�
AdTextAsset
text (	H �c
pinned_field (2M.google.ads.googleads.v13.enums.ServedAssetFieldTypeEnum.ServedAssetFieldTypep
asset_performance_label (2O.google.ads.googleads.v13.enums.AssetPerformanceLabelEnum.AssetPerformanceLabelR
policy_summary_info (25.google.ads.googleads.v13.common.AdAssetPolicySummaryB
_text",
AdImageAsset
asset (	H �B
_asset",
AdVideoAsset
asset (	H �B
_asset"2
AdMediaBundleAsset
asset (	H �B
_asset"<
AdDiscoveryCarouselCardAsset
asset (	H �B
_assetB�
#com.google.ads.googleads.v13.commonBAdAssetProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/common;common�GAA�Google.Ads.GoogleAds.V13.Common�Google\\Ads\\GoogleAds\\V13\\Common�#Google::Ads::GoogleAds::V13::Commonbproto3
�
>google/ads/googleads/v13/enums/display_ad_format_setting.protogoogle.ads.googleads.v13.enums"�
DisplayAdFormatSettingEnum"c
DisplayAdFormatSetting
UNSPECIFIED 
UNKNOWN
ALL_FORMATS

NON_NATIVE

NATIVEB�
"com.google.ads.googleads.v13.enumsBDisplayAdFormatSettingProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Dgoogle/ads/googleads/v13/enums/call_conversion_reporting_state.protogoogle.ads.googleads.v13.enums"�
 CallConversionReportingStateEnum"�
CallConversionReportingState
UNSPECIFIED 
UNKNOWN
DISABLED,
(USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION-
)USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTIONB�
"com.google.ads.googleads.v13.enumsB!CallConversionReportingStateProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
@google/ads/googleads/v13/enums/display_upload_product_type.protogoogle.ads.googleads.v13.enums"�
DisplayUploadProductTypeEnum"�
DisplayUploadProductType
UNSPECIFIED 
UNKNOWN
HTML5_UPLOAD_AD
DYNAMIC_HTML5_EDUCATION_AD
DYNAMIC_HTML5_FLIGHT_AD!
DYNAMIC_HTML5_HOTEL_RENTAL_AD
DYNAMIC_HTML5_JOB_AD
DYNAMIC_HTML5_LOCAL_AD 
DYNAMIC_HTML5_REAL_ESTATE_AD
DYNAMIC_HTML5_CUSTOM_AD	
DYNAMIC_HTML5_TRAVEL_AD

DYNAMIC_HTML5_HOTEL_ADB�
"com.google.ads.googleads.v13.enumsBDisplayUploadProductTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Dgoogle/ads/googleads/v13/enums/legacy_app_install_ad_app_store.protogoogle.ads.googleads.v13.enums"�
LegacyAppInstallAdAppStoreEnum"�
LegacyAppInstallAdAppStore
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_PLAY
WINDOWS_STORE
WINDOWS_PHONE_STORE
CN_APP_STOREB�
"com.google.ads.googleads.v13.enumsBLegacyAppInstallAdAppStoreProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
.google/ads/googleads/v13/enums/mime_type.protogoogle.ads.googleads.v13.enums"�
MimeTypeEnum"�
MimeType
UNSPECIFIED 
UNKNOWN

IMAGE_JPEG
	IMAGE_GIF
	IMAGE_PNG	
FLASH
	TEXT_HTML
PDF

MSWORD
MSEXCEL	
RTF

	AUDIO_WAV
	AUDIO_MP3
HTML5_AD_ZIPB�
"com.google.ads.googleads.v13.enumsBMimeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
4google/ads/googleads/v13/enums/video_thumbnail.protogoogle.ads.googleads.v13.enums"�
VideoThumbnailEnum"x
VideoThumbnail
UNSPECIFIED 
UNKNOWN
DEFAULT_THUMBNAIL
THUMBNAIL_1
THUMBNAIL_2
THUMBNAIL_3B�
"com.google.ads.googleads.v13.enumsBVideoThumbnailProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�J
3google/ads/googleads/v13/common/ad_type_infos.protogoogle.ads.googleads.v13.commonDgoogle/ads/googleads/v13/enums/call_conversion_reporting_state.proto>google/ads/googleads/v13/enums/display_ad_format_setting.proto@google/ads/googleads/v13/enums/display_upload_product_type.protoDgoogle/ads/googleads/v13/enums/legacy_app_install_ad_app_store.proto.google/ads/googleads/v13/enums/mime_type.proto4google/ads/googleads/v13/enums/video_thumbnail.protogoogle/api/field_behavior.proto"�

TextAdInfo
headline (	H �
description1 (	H�
description2 (	H�B
	_headlineB
_description1B
_description2"�
ExpandedTextAdInfo
headline_part1 (	H �
headline_part2	 (	H�
headline_part3
 (	H�
description (	H�
description2 (	H�
path1 (	H�
path2 (	H�B
_headline_part1B
_headline_part2B
_headline_part3B
_descriptionB
_description2B
_path1B
_path2"s
ExpandedDynamicSearchAdInfo
description (	H �
description2 (	H�B
_descriptionB
_description2"
HotelAdInfo"
TravelAdInfo"
ShoppingSmartAdInfo"
ShoppingProductAdInfo"E
ShoppingComparisonListingAdInfo
headline (	H �B
	_headline"�
ImageAdInfo
pixel_width (H�
pixel_height (H�
	image_url (	H� 
preview_pixel_width (H�!
preview_pixel_height (H�
preview_image_url (	H�H
	mime_type
 (25.google.ads.googleads.v13.enums.MimeTypeEnum.MimeType
name (	H�

media_file (	H 
data (H "
ad_id_to_copy_image_from (H B
imageB
_pixel_widthB
_pixel_heightB

_image_urlB
_preview_pixel_widthB
_preview_pixel_heightB
_preview_image_urlB
_name"�
VideoBumperInStreamAdInfoG
companion_banner (2-.google.ads.googleads.v13.common.AdImageAsset
action_button_label (	
action_headline (	"�
VideoNonSkippableInStreamAdInfoG
companion_banner (2-.google.ads.googleads.v13.common.AdImageAsset
action_button_label (	
action_headline (	"�
VideoTrueViewInStreamAdInfo
action_button_label (	
action_headline (	G
companion_banner (2-.google.ads.googleads.v13.common.AdImageAsset"=
VideoOutstreamAdInfo
headline (	
description (	"�
InFeedVideoAdInfo
headline (	
description1 (	
description2 (	T
	thumbnail (2A.google.ads.googleads.v13.enums.VideoThumbnailEnum.VideoThumbnail"�
VideoAdInfo<
video (2-.google.ads.googleads.v13.common.AdVideoAssetQ
	in_stream (2<.google.ads.googleads.v13.common.VideoTrueViewInStreamAdInfoH L
bumper (2:.google.ads.googleads.v13.common.VideoBumperInStreamAdInfoH K

out_stream (25.google.ads.googleads.v13.common.VideoOutstreamAdInfoH Y
non_skippable (2@.google.ads.googleads.v13.common.VideoNonSkippableInStreamAdInfoH E
in_feed	 (22.google.ads.googleads.v13.common.InFeedVideoAdInfoH B
format"�
VideoResponsiveAdInfo?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetD
long_headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAssetE
call_to_actions (2,.google.ads.googleads.v13.common.AdTextAsset=
videos (2-.google.ads.googleads.v13.common.AdVideoAssetH
companion_banners (2-.google.ads.googleads.v13.common.AdImageAsset
breadcrumb1 (	
breadcrumb2 (	"�
ResponsiveSearchAdInfo?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAsset
path1 (	H �
path2 (	H�B
_path1B
_path2"�
LegacyResponsiveDisplayAdInfo
short_headline (	H �
long_headline (	H�
description (	H�
business_name (	H�!
allow_flexible_color (H�
accent_color (	H�

main_color (	H� 
call_to_action_text (	H�

logo_image (	H�
square_logo_image (	H	�
marketing_image (	H
�#
square_marketing_image (	H�i
format_setting (2Q.google.ads.googleads.v13.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting
price_prefix (	H�

promo_text (	H�B
_short_headlineB
_long_headlineB
_descriptionB
_business_nameB
_allow_flexible_colorB
_accent_colorB
_main_colorB
_call_to_action_textB
_logo_imageB
_square_logo_imageB
_marketing_imageB
_square_marketing_imageB
_price_prefixB
_promo_text"�
	AppAdInfoG
mandatory_ad_text (2,.google.ads.googleads.v13.common.AdTextAsset?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAsset=
images (2-.google.ads.googleads.v13.common.AdImageAssetE
youtube_videos (2-.google.ads.googleads.v13.common.AdVideoAssetP
html5_media_bundles (23.google.ads.googleads.v13.common.AdMediaBundleAsset"�
AppEngagementAdInfo?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAsset=
images (2-.google.ads.googleads.v13.common.AdImageAsset=
videos (2-.google.ads.googleads.v13.common.AdVideoAsset"�
AppPreRegistrationAdInfo?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAsset=
images (2-.google.ads.googleads.v13.common.AdImageAssetE
youtube_videos (2-.google.ads.googleads.v13.common.AdVideoAsset"�
LegacyAppInstallAdInfo
app_id (	H �l
	app_store (2Y.google.ads.googleads.v13.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore
headline (	H�
description1 (	H�
description2	 (	H�B	
_app_idB
	_headlineB
_description1B
_description2"�
ResponsiveDisplayAdInfoG
marketing_images (2-.google.ads.googleads.v13.common.AdImageAssetN
square_marketing_images (2-.google.ads.googleads.v13.common.AdImageAssetB
logo_images (2-.google.ads.googleads.v13.common.AdImageAssetI
square_logo_images (2-.google.ads.googleads.v13.common.AdImageAsset?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetC
long_headline (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAssetE
youtube_videos (2-.google.ads.googleads.v13.common.AdVideoAsset
business_name (	H �

main_color (	H�
accent_color (	H�!
allow_flexible_color (H� 
call_to_action_text (	H�
price_prefix (	H�

promo_text (	H�i
format_setting (2Q.google.ads.googleads.v13.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSettingU
control_spec (2?.google.ads.googleads.v13.common.ResponsiveDisplayAdControlSpecB
_business_nameB
_main_colorB
_accent_colorB
_allow_flexible_colorB
_call_to_action_textB
_price_prefixB
_promo_text"�
LocalAdInfo?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAssetE
call_to_actions (2,.google.ads.googleads.v13.common.AdTextAssetG
marketing_images (2-.google.ads.googleads.v13.common.AdImageAssetB
logo_images (2-.google.ads.googleads.v13.common.AdImageAsset=
videos (2-.google.ads.googleads.v13.common.AdVideoAsset
path1	 (	H �
path2
 (	H�B
_path1B
_path2"�
DisplayUploadAdInfoz
display_upload_product_type (2U.google.ads.googleads.v13.enums.DisplayUploadProductTypeEnum.DisplayUploadProductTypeK
media_bundle (23.google.ads.googleads.v13.common.AdMediaBundleAssetH B
media_asset"a
ResponsiveDisplayAdControlSpec!
enable_asset_enhancements (
enable_autogen_video ("�
SmartCampaignAdInfo?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAsset"�

CallAdInfo
country_code (	
phone_number (	
business_name (	
	headline1 (	
	headline2 (	
description1 (	
description2 (	
call_tracked (
disable_call_conversion (%
phone_number_verification_url (	
conversion_action	 (	�
conversion_reporting_state
 (2].google.ads.googleads.v13.enums.CallConversionReportingStateEnum.CallConversionReportingState
path1 (	
path2 (	"�
DiscoveryMultiAssetAdInfoG
marketing_images (2-.google.ads.googleads.v13.common.AdImageAssetN
square_marketing_images (2-.google.ads.googleads.v13.common.AdImageAssetP
portrait_marketing_images (2-.google.ads.googleads.v13.common.AdImageAssetB
logo_images (2-.google.ads.googleads.v13.common.AdImageAsset?
	headlines (2,.google.ads.googleads.v13.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v13.common.AdTextAsset
business_name (	H � 
call_to_action_text (	H�
lead_form_only	 (H�B
_business_nameB
_call_to_action_textB
_lead_form_only"�
DiscoveryCarouselAdInfo
business_name (	B�AF

logo_image (2-.google.ads.googleads.v13.common.AdImageAssetB�AC
headline (2,.google.ads.googleads.v13.common.AdTextAssetB�AF
description (2,.google.ads.googleads.v13.common.AdTextAssetB�A
call_to_action_text (	Z
carousel_cards (2=.google.ads.googleads.v13.common.AdDiscoveryCarouselCardAssetB�AB�
#com.google.ads.googleads.v13.commonBAdTypeInfosProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/common;common�GAA�Google.Ads.GoogleAds.V13.Common�Google\\Ads\\GoogleAds\\V13\\Common�#Google::Ads::GoogleAds::V13::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

