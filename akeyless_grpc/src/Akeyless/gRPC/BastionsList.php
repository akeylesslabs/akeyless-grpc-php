<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/bastions_list.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.BastionsList</code>
 */
class BastionsList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .akeyless_grpc.BastionListEntry clusters = 191311291 [json_name = "clusters"];</code>
     */
    private $clusters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Akeyless\gRPC\BastionListEntry>|\Google\Protobuf\Internal\RepeatedField $clusters
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\BastionsList::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .akeyless_grpc.BastionListEntry clusters = 191311291 [json_name = "clusters"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * Generated from protobuf field <code>repeated .akeyless_grpc.BastionListEntry clusters = 191311291 [json_name = "clusters"];</code>
     * @param array<\Akeyless\gRPC\BastionListEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClusters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Akeyless\gRPC\BastionListEntry::class);
        $this->clusters = $arr;

        return $this;
    }

}

