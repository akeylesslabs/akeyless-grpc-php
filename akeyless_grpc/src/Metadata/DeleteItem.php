<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/delete_item.proto

namespace Metadata;

class DeleteItem
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
models/delete_item.protoakeyless_grpc"�

DeleteItem\'
accessibility���e (	Raccessibility1
delete_immediately��. (Rdelete-immediately*
delete_in_daysރ�� (Rdelete-in-days
json��� (Rjson
name��� (	Rname
token���4 (	Rtoken 
	uid_token���� (	R	uid-token
versionعԧ (RversionBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

