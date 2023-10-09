<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/asset.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains policy information for an asset under AssetFieldType context.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.AssetFieldTypePolicySummary</code>
 */
class AssetFieldTypePolicySummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. FieldType of this asset.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $asset_field_type = null;
    /**
     * Output only. Source of this asset.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.AssetSourceEnum.AssetSource asset_source = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $asset_source = null;
    /**
     * Output only. Policy summary.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.resources.AssetPolicySummary policy_summary_info = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $policy_summary_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $asset_field_type
     *           Output only. FieldType of this asset.
     *     @type int $asset_source
     *           Output only. Source of this asset.
     *     @type \Google\Ads\GoogleAds\V13\Resources\AssetPolicySummary $policy_summary_info
     *           Output only. Policy summary.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\Asset::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. FieldType of this asset.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAssetFieldType()
    {
        return isset($this->asset_field_type) ? $this->asset_field_type : 0;
    }

    public function hasAssetFieldType()
    {
        return isset($this->asset_field_type);
    }

    public function clearAssetFieldType()
    {
        unset($this->asset_field_type);
    }

    /**
     * Output only. FieldType of this asset.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAssetFieldType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\AssetFieldTypeEnum\AssetFieldType::class);
        $this->asset_field_type = $var;

        return $this;
    }

    /**
     * Output only. Source of this asset.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.AssetSourceEnum.AssetSource asset_source = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAssetSource()
    {
        return isset($this->asset_source) ? $this->asset_source : 0;
    }

    public function hasAssetSource()
    {
        return isset($this->asset_source);
    }

    public function clearAssetSource()
    {
        unset($this->asset_source);
    }

    /**
     * Output only. Source of this asset.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.AssetSourceEnum.AssetSource asset_source = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAssetSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\AssetSourceEnum\AssetSource::class);
        $this->asset_source = $var;

        return $this;
    }

    /**
     * Output only. Policy summary.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.resources.AssetPolicySummary policy_summary_info = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V13\Resources\AssetPolicySummary|null
     */
    public function getPolicySummaryInfo()
    {
        return $this->policy_summary_info;
    }

    public function hasPolicySummaryInfo()
    {
        return isset($this->policy_summary_info);
    }

    public function clearPolicySummaryInfo()
    {
        unset($this->policy_summary_info);
    }

    /**
     * Output only. Policy summary.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.resources.AssetPolicySummary policy_summary_info = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V13\Resources\AssetPolicySummary $var
     * @return $this
     */
    public function setPolicySummaryInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Resources\AssetPolicySummary::class);
        $this->policy_summary_info = $var;

        return $this;
    }

}

