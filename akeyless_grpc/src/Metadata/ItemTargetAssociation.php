<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/item_target_association.proto

namespace Metadata;

class ItemTargetAssociation
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
$models/item_target_association.protoakeyless_grpc"�
ItemTargetAssociation
assoc_id��� (	Rassoc_idX

attributes�Ҷ� (24.akeyless_grpc.ItemTargetAssociation.AttributesEntryR
attributes 
	target_id��� (R	target_id$
target_name�׋� (	Rtarget_name$
target_typeۭ�� (	Rtarget_type1
AttributesEntry
key (	
value (	:8BQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

