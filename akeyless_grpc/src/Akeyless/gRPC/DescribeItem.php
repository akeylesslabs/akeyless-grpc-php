<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/describe_item.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.DescribeItem</code>
 */
class DescribeItem extends \Google\Protobuf\Internal\Message
{
    /**
     * for personal password manager
     *
     * Generated from protobuf field <code>string accessibility = 213139122 [json_name = "accessibility"];</code>
     */
    protected $accessibility = '';
    /**
     * Indicate if the item should return with ztb cluster details (url, etc)
     *
     * Generated from protobuf field <code>bool bastion_details = 287452515 [json_name = "bastion-details"];</code>
     */
    protected $bastion_details = false;
    /**
     * The display id of the item
     *
     * Generated from protobuf field <code>string display_id = 377696763 [json_name = "display-id"];</code>
     */
    protected $display_id = '';
    /**
     * Indicate if the item should return with clusters details (url, etc)
     *
     * Generated from protobuf field <code>bool gateway_details = 313497531 [json_name = "gateway-details"];</code>
     */
    protected $gateway_details = false;
    /**
     * Item id of the item
     *
     * Generated from protobuf field <code>int64 item_id = 505544216 [json_name = "item-id"];</code>
     */
    protected $item_id = 0;
    /**
     * Set output format to JSON
     *
     * Generated from protobuf field <code>bool json = 3271912 [json_name = "json"];</code>
     */
    protected $json = false;
    /**
     * Item name
     *
     * Generated from protobuf field <code>string name = 3373707 [json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * Include all associated services details
     *
     * Generated from protobuf field <code>bool services_details = 457988143 [json_name = "services-details"];</code>
     */
    protected $services_details = false;
    /**
     * Include all item versions in reply
     *
     * Generated from protobuf field <code>bool show_versions = 66440341 [json_name = "show-versions"];</code>
     */
    protected $show_versions = false;
    /**
     * Authentication token (see `/auth` and `/configure`)
     *
     * Generated from protobuf field <code>string token = 110541305 [json_name = "token"];</code>
     */
    protected $token = '';
    /**
     * The universal identity token, Required only for universal_identity authentication
     *
     * Generated from protobuf field <code>string uid_token = 468850238 [json_name = "uid-token"];</code>
     */
    protected $uid_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $accessibility
     *           for personal password manager
     *     @type bool $bastion_details
     *           Indicate if the item should return with ztb cluster details (url, etc)
     *     @type string $display_id
     *           The display id of the item
     *     @type bool $gateway_details
     *           Indicate if the item should return with clusters details (url, etc)
     *     @type int|string $item_id
     *           Item id of the item
     *     @type bool $json
     *           Set output format to JSON
     *     @type string $name
     *           Item name
     *     @type bool $services_details
     *           Include all associated services details
     *     @type bool $show_versions
     *           Include all item versions in reply
     *     @type string $token
     *           Authentication token (see `/auth` and `/configure`)
     *     @type string $uid_token
     *           The universal identity token, Required only for universal_identity authentication
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\DescribeItem::initOnce();
        parent::__construct($data);
    }

    /**
     * for personal password manager
     *
     * Generated from protobuf field <code>string accessibility = 213139122 [json_name = "accessibility"];</code>
     * @return string
     */
    public function getAccessibility()
    {
        return $this->accessibility;
    }

    /**
     * for personal password manager
     *
     * Generated from protobuf field <code>string accessibility = 213139122 [json_name = "accessibility"];</code>
     * @param string $var
     * @return $this
     */
    public function setAccessibility($var)
    {
        GPBUtil::checkString($var, True);
        $this->accessibility = $var;

        return $this;
    }

    /**
     * Indicate if the item should return with ztb cluster details (url, etc)
     *
     * Generated from protobuf field <code>bool bastion_details = 287452515 [json_name = "bastion-details"];</code>
     * @return bool
     */
    public function getBastionDetails()
    {
        return $this->bastion_details;
    }

    /**
     * Indicate if the item should return with ztb cluster details (url, etc)
     *
     * Generated from protobuf field <code>bool bastion_details = 287452515 [json_name = "bastion-details"];</code>
     * @param bool $var
     * @return $this
     */
    public function setBastionDetails($var)
    {
        GPBUtil::checkBool($var);
        $this->bastion_details = $var;

        return $this;
    }

    /**
     * The display id of the item
     *
     * Generated from protobuf field <code>string display_id = 377696763 [json_name = "display-id"];</code>
     * @return string
     */
    public function getDisplayId()
    {
        return $this->display_id;
    }

    /**
     * The display id of the item
     *
     * Generated from protobuf field <code>string display_id = 377696763 [json_name = "display-id"];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_id = $var;

        return $this;
    }

    /**
     * Indicate if the item should return with clusters details (url, etc)
     *
     * Generated from protobuf field <code>bool gateway_details = 313497531 [json_name = "gateway-details"];</code>
     * @return bool
     */
    public function getGatewayDetails()
    {
        return $this->gateway_details;
    }

    /**
     * Indicate if the item should return with clusters details (url, etc)
     *
     * Generated from protobuf field <code>bool gateway_details = 313497531 [json_name = "gateway-details"];</code>
     * @param bool $var
     * @return $this
     */
    public function setGatewayDetails($var)
    {
        GPBUtil::checkBool($var);
        $this->gateway_details = $var;

        return $this;
    }

    /**
     * Item id of the item
     *
     * Generated from protobuf field <code>int64 item_id = 505544216 [json_name = "item-id"];</code>
     * @return int|string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Item id of the item
     *
     * Generated from protobuf field <code>int64 item_id = 505544216 [json_name = "item-id"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkInt64($var);
        $this->item_id = $var;

        return $this;
    }

    /**
     * Set output format to JSON
     *
     * Generated from protobuf field <code>bool json = 3271912 [json_name = "json"];</code>
     * @return bool
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * Set output format to JSON
     *
     * Generated from protobuf field <code>bool json = 3271912 [json_name = "json"];</code>
     * @param bool $var
     * @return $this
     */
    public function setJson($var)
    {
        GPBUtil::checkBool($var);
        $this->json = $var;

        return $this;
    }

    /**
     * Item name
     *
     * Generated from protobuf field <code>string name = 3373707 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Item name
     *
     * Generated from protobuf field <code>string name = 3373707 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Include all associated services details
     *
     * Generated from protobuf field <code>bool services_details = 457988143 [json_name = "services-details"];</code>
     * @return bool
     */
    public function getServicesDetails()
    {
        return $this->services_details;
    }

    /**
     * Include all associated services details
     *
     * Generated from protobuf field <code>bool services_details = 457988143 [json_name = "services-details"];</code>
     * @param bool $var
     * @return $this
     */
    public function setServicesDetails($var)
    {
        GPBUtil::checkBool($var);
        $this->services_details = $var;

        return $this;
    }

    /**
     * Include all item versions in reply
     *
     * Generated from protobuf field <code>bool show_versions = 66440341 [json_name = "show-versions"];</code>
     * @return bool
     */
    public function getShowVersions()
    {
        return $this->show_versions;
    }

    /**
     * Include all item versions in reply
     *
     * Generated from protobuf field <code>bool show_versions = 66440341 [json_name = "show-versions"];</code>
     * @param bool $var
     * @return $this
     */
    public function setShowVersions($var)
    {
        GPBUtil::checkBool($var);
        $this->show_versions = $var;

        return $this;
    }

    /**
     * Authentication token (see `/auth` and `/configure`)
     *
     * Generated from protobuf field <code>string token = 110541305 [json_name = "token"];</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Authentication token (see `/auth` and `/configure`)
     *
     * Generated from protobuf field <code>string token = 110541305 [json_name = "token"];</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * The universal identity token, Required only for universal_identity authentication
     *
     * Generated from protobuf field <code>string uid_token = 468850238 [json_name = "uid-token"];</code>
     * @return string
     */
    public function getUidToken()
    {
        return $this->uid_token;
    }

    /**
     * The universal identity token, Required only for universal_identity authentication
     *
     * Generated from protobuf field <code>string uid_token = 468850238 [json_name = "uid-token"];</code>
     * @param string $var
     * @return $this
     */
    public function setUidToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid_token = $var;

        return $this;
    }

}

