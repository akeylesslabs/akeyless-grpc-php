<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/windows_service_attributes.proto

namespace Metadata;

class WindowsServiceAttributes
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Metadata\SpecialTypes::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'models/windows_service_attributes.protoakeyless_grpc"{
WindowsServiceAttributes+
connection_type���\\ (	Rconnection_type
port��� (	Rport
use_tls�˵F (Ruse_tlsBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

