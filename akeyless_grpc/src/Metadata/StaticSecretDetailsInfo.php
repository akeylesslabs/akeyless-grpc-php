<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/static_secret_details_info.proto

namespace Metadata;

class StaticSecretDetailsInfo
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
�
\'models/static_secret_details_info.protoakeyless_grpc"�
StaticSecretDetailsInfo
format���] (	Rformat&
max_versions���� (Rmax_versions9
notify_on_change_event���~ (Rnotify_on_change_event
username���~ (	Rusername
website���G (	Rwebsite
websitesə�M (	RwebsitesBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

