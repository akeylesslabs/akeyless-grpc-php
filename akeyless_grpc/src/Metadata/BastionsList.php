<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/bastions_list.proto

namespace Metadata;

class BastionsList
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Metadata\SpecialTypes::initOnce();
        \Metadata\BastionListEntry::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
models/bastions_list.protoakeyless_grpcmodels/bastion_list_entry.proto"N
BastionsList>
clusters�ۜ[ (2.akeyless_grpc.BastionListEntryRclustersBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP Pbproto3'
        , true);

        static::$is_initialized = true;
    }
}

