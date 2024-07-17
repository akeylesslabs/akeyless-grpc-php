<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/static_secret_details_info.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.StaticSecretDetailsInfo</code>
 */
class StaticSecretDetailsInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * StaticSecretFormat defines the format of static secret (e.g. Text)
     *
     * Generated from protobuf field <code>string format = 195037195 [json_name = "format"];</code>
     */
    protected $format = '';
    /**
     * Generated from protobuf field <code>int64 max_versions = 489956587 [json_name = "max_versions"];</code>
     */
    protected $max_versions = 0;
    /**
     * Generated from protobuf field <code>bool notify_on_change_event = 264421047 [json_name = "notify_on_change_event"];</code>
     */
    protected $notify_on_change_event = false;
    /**
     * Generated from protobuf field <code>string username = 265713450 [json_name = "username"];</code>
     */
    protected $username = '';
    /**
     * deprecated
     *
     * Generated from protobuf field <code>string website = 150593693 [json_name = "website"];</code>
     */
    protected $website = '';
    /**
     * Generated from protobuf field <code>repeated string websites = 163433673 [json_name = "websites"];</code>
     */
    private $websites;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $format
     *           StaticSecretFormat defines the format of static secret (e.g. Text)
     *     @type int|string $max_versions
     *     @type bool $notify_on_change_event
     *     @type string $username
     *     @type string $website
     *           deprecated
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $websites
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\StaticSecretDetailsInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * StaticSecretFormat defines the format of static secret (e.g. Text)
     *
     * Generated from protobuf field <code>string format = 195037195 [json_name = "format"];</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * StaticSecretFormat defines the format of static secret (e.g. Text)
     *
     * Generated from protobuf field <code>string format = 195037195 [json_name = "format"];</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 max_versions = 489956587 [json_name = "max_versions"];</code>
     * @return int|string
     */
    public function getMaxVersions()
    {
        return $this->max_versions;
    }

    /**
     * Generated from protobuf field <code>int64 max_versions = 489956587 [json_name = "max_versions"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxVersions($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_versions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool notify_on_change_event = 264421047 [json_name = "notify_on_change_event"];</code>
     * @return bool
     */
    public function getNotifyOnChangeEvent()
    {
        return $this->notify_on_change_event;
    }

    /**
     * Generated from protobuf field <code>bool notify_on_change_event = 264421047 [json_name = "notify_on_change_event"];</code>
     * @param bool $var
     * @return $this
     */
    public function setNotifyOnChangeEvent($var)
    {
        GPBUtil::checkBool($var);
        $this->notify_on_change_event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 265713450 [json_name = "username"];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 265713450 [json_name = "username"];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>string website = 150593693 [json_name = "website"];</code>
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>string website = 150593693 [json_name = "website"];</code>
     * @param string $var
     * @return $this
     */
    public function setWebsite($var)
    {
        GPBUtil::checkString($var, True);
        $this->website = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string websites = 163433673 [json_name = "websites"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWebsites()
    {
        return $this->websites;
    }

    /**
     * Generated from protobuf field <code>repeated string websites = 163433673 [json_name = "websites"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWebsites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->websites = $arr;

        return $this;
    }

}

