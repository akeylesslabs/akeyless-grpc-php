<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/attribute_type_and_value.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.AttributeTypeAndValue</code>
 */
class AttributeTypeAndValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 type = 2622298 [json_name = "Type"];</code>
     */
    private $type;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct value = 82420049 [json_name = "Value"];</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $type
     *     @type \Google\Protobuf\Struct $value
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\AttributeTypeAndValue::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 type = 2622298 [json_name = "Type"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>repeated int64 type = 2622298 [json_name = "Type"];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct value = 82420049 [json_name = "Value"];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct value = 82420049 [json_name = "Value"];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->value = $var;

        return $this;
    }

}

