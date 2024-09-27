<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/datasources/v1beta/fileuploads.proto

namespace Google\Shopping\Merchant\DataSources\V1beta\FileUpload;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An error occurring in the data source, like "invalid price".
 *
 * Generated from protobuf message <code>google.shopping.merchant.datasources.v1beta.FileUpload.Issue</code>
 */
class Issue extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The title of the issue, for example, "Item too big".
     *
     * Generated from protobuf field <code>string title = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $title = '';
    /**
     * Output only. The error description, for example, "Your data source
     * contains items which have too many attributes, or are too big. These
     * items will be dropped".
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $description = '';
    /**
     * Output only. The code of the error, for example,
     * "validation/invalid_value". Returns
     * "?" if the code is unknown.
     *
     * Generated from protobuf field <code>string code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $code = '';
    /**
     * Output only. The number of occurrences of the error in the file upload.
     *
     * Generated from protobuf field <code>int64 count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $count = 0;
    /**
     * Output only. The severity of the issue.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.FileUpload.Issue.Severity severity = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $severity = 0;
    /**
     * Output only. Link to the documentation explaining the issue in more
     * details, if available.
     *
     * Generated from protobuf field <code>string documentation_uri = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $documentation_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           Output only. The title of the issue, for example, "Item too big".
     *     @type string $description
     *           Output only. The error description, for example, "Your data source
     *           contains items which have too many attributes, or are too big. These
     *           items will be dropped".
     *     @type string $code
     *           Output only. The code of the error, for example,
     *           "validation/invalid_value". Returns
     *           "?" if the code is unknown.
     *     @type int|string $count
     *           Output only. The number of occurrences of the error in the file upload.
     *     @type int $severity
     *           Output only. The severity of the issue.
     *     @type string $documentation_uri
     *           Output only. Link to the documentation explaining the issue in more
     *           details, if available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta\Fileuploads::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The title of the issue, for example, "Item too big".
     *
     * Generated from protobuf field <code>string title = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Output only. The title of the issue, for example, "Item too big".
     *
     * Generated from protobuf field <code>string title = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Output only. The error description, for example, "Your data source
     * contains items which have too many attributes, or are too big. These
     * items will be dropped".
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Output only. The error description, for example, "Your data source
     * contains items which have too many attributes, or are too big. These
     * items will be dropped".
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The code of the error, for example,
     * "validation/invalid_value". Returns
     * "?" if the code is unknown.
     *
     * Generated from protobuf field <code>string code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Output only. The code of the error, for example,
     * "validation/invalid_value". Returns
     * "?" if the code is unknown.
     *
     * Generated from protobuf field <code>string code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Output only. The number of occurrences of the error in the file upload.
     *
     * Generated from protobuf field <code>int64 count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Output only. The number of occurrences of the error in the file upload.
     *
     * Generated from protobuf field <code>int64 count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Output only. The severity of the issue.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.FileUpload.Issue.Severity severity = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Output only. The severity of the issue.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.FileUpload.Issue.Severity severity = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\DataSources\V1beta\FileUpload\Issue\Severity::class);
        $this->severity = $var;

        return $this;
    }

    /**
     * Output only. Link to the documentation explaining the issue in more
     * details, if available.
     *
     * Generated from protobuf field <code>string documentation_uri = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDocumentationUri()
    {
        return $this->documentation_uri;
    }

    /**
     * Output only. Link to the documentation explaining the issue in more
     * details, if available.
     *
     * Generated from protobuf field <code>string documentation_uri = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentationUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->documentation_uri = $var;

        return $this;
    }

}

