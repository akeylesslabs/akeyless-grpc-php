<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
//
// Akeyless API
//
// The purpose of this application is to provide access to Akeyless API.
//
// The version of the OpenAPI document: 2.0
//
// Contact: support@akeyless.io
//
// Generated by OpenAPI Generator: https://openapi-generator.tech
//
namespace Akeyless\gRPC;

/**
 */
class AkeylessV2ServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Akeyless\gRPC\AuthRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Auth(\Akeyless\gRPC\AuthRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/Auth',
        $argument,
        ['\Akeyless\gRPC\AuthOutput', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Akeyless\gRPC\CreateSecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateSecret(\Akeyless\gRPC\CreateSecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/CreateSecret',
        $argument,
        ['\Akeyless\gRPC\CreateSecretOutput', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Akeyless\gRPC\DeleteItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteItem(\Akeyless\gRPC\DeleteItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/DeleteItem',
        $argument,
        ['\Akeyless\gRPC\DeleteItemOutput', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Akeyless\gRPC\DescribeItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeItem(\Akeyless\gRPC\DescribeItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/DescribeItem',
        $argument,
        ['\Akeyless\gRPC\Item', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Akeyless\gRPC\GetRotatedSecretValueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRotatedSecretValue(\Akeyless\gRPC\GetRotatedSecretValueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/GetRotatedSecretValue',
        $argument,
        ['\Akeyless\gRPC\GetRotatedSecretValueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Akeyless\gRPC\GetSecretValueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSecretValue(\Akeyless\gRPC\GetSecretValueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/GetSecretValue',
        $argument,
        ['\Akeyless\gRPC\GetSecretValueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Akeyless\gRPC\ListItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListItems(\Akeyless\gRPC\ListItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/ListItems',
        $argument,
        ['\Akeyless\gRPC\ListItemsInPathOutput', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Akeyless\gRPC\UpdateSecretValRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSecretVal(\Akeyless\gRPC\UpdateSecretValRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/akeyless_grpc.services.v2service.AkeylessV2Service/UpdateSecretVal',
        $argument,
        ['\Akeyless\gRPC\UpdateSecretValOutput', 'decode'],
        $metadata, $options);
    }

}
