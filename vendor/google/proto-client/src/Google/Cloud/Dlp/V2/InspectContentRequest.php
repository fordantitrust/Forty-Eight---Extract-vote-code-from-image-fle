<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to search for potentially sensitive info in a ContentItem.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.InspectContentRequest</code>
 */
class InspectContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource name, for example projects/my-project-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Configuration for the inspector. What specified here will override
     * the template referenced by the inspect_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 2;</code>
     */
    private $inspect_config = null;
    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 3;</code>
     */
    private $item = null;
    /**
     * Optional template to use. Any configuration directly specified in
     * inspect_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 4;</code>
     */
    private $inspect_template_name = '';

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * The parent resource name, for example projects/my-project-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource name, for example projects/my-project-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Configuration for the inspector. What specified here will override
     * the template referenced by the inspect_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 2;</code>
     * @return \Google\Cloud\Dlp\V2\InspectConfig
     */
    public function getInspectConfig()
    {
        return $this->inspect_config;
    }

    /**
     * Configuration for the inspector. What specified here will override
     * the template referenced by the inspect_template_name argument.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 2;</code>
     * @param \Google\Cloud\Dlp\V2\InspectConfig $var
     * @return $this
     */
    public function setInspectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectConfig::class);
        $this->inspect_config = $var;

        return $this;
    }

    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 3;</code>
     * @return \Google\Cloud\Dlp\V2\ContentItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 3;</code>
     * @param \Google\Cloud\Dlp\V2\ContentItem $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ContentItem::class);
        $this->item = $var;

        return $this;
    }

    /**
     * Optional template to use. Any configuration directly specified in
     * inspect_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 4;</code>
     * @return string
     */
    public function getInspectTemplateName()
    {
        return $this->inspect_template_name;
    }

    /**
     * Optional template to use. Any configuration directly specified in
     * inspect_config will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInspectTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->inspect_template_name = $var;

        return $this;
    }

}

