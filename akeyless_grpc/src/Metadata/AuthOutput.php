<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/auth_output.proto

namespace Metadata;

class AuthOutput
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Metadata\SpecialTypes::initOnce();
        \Metadata\SystemAccessCredentialsReplyObj::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
models/auth_output.protoakeyless_grpc0models/system_access_credentials_reply_obj.proto"n

AuthOutputG
creds��- (2..akeyless_grpc.SystemAccessCredentialsReplyObjRcreds
token���4 (	RtokenBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP Pbproto3'
        , true);

        static::$is_initialized = true;
    }
}

