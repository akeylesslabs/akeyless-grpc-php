<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: services/v2_service.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.GetSecretValueRequest</code>
 */
class GetSecretValueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.akeyless_grpc.GetSecretValue body = 1;</code>
     */
    protected $body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Akeyless\gRPC\GetSecretValue $body
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\V2Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.GetSecretValue body = 1;</code>
     * @return \Akeyless\gRPC\GetSecretValue|null
     */
    public function getBody()
    {
        return $this->body;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.GetSecretValue body = 1;</code>
     * @param \Akeyless\gRPC\GetSecretValue $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\GetSecretValue::class);
        $this->body = $var;

        return $this;
    }

}

