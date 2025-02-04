<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/list_items_in_path_output.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.ListItemsInPathOutput</code>
 */
class ListItemsInPathOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string folders = 146378300 [json_name = "folders"];</code>
     */
    private $folders;
    /**
     * Generated from protobuf field <code>repeated .akeyless_grpc.Item items = 100526016 [json_name = "items"];</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>string next_page = 143355997 [json_name = "next_page"];</code>
     */
    protected $next_page = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $folders
     *     @type array<\Akeyless\gRPC\Item>|\Google\Protobuf\Internal\RepeatedField $items
     *     @type string $next_page
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\ListItemsInPathOutput::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string folders = 146378300 [json_name = "folders"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * Generated from protobuf field <code>repeated string folders = 146378300 [json_name = "folders"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFolders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->folders = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .akeyless_grpc.Item items = 100526016 [json_name = "items"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .akeyless_grpc.Item items = 100526016 [json_name = "items"];</code>
     * @param array<\Akeyless\gRPC\Item>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Akeyless\gRPC\Item::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string next_page = 143355997 [json_name = "next_page"];</code>
     * @return string
     */
    public function getNextPage()
    {
        return $this->next_page;
    }

    /**
     * Generated from protobuf field <code>string next_page = 143355997 [json_name = "next_page"];</code>
     * @param string $var
     * @return $this
     */
    public function setNextPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page = $var;

        return $this;
    }

}

