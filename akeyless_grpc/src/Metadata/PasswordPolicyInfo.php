<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/password_policy_info.proto

namespace Metadata;

class PasswordPolicyInfo
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
!models/password_policy_info.protoakeyless_grpc"�
PasswordPolicyInfo+
password_length���) (Rpassword_length4
use_capital_letters�㣃 (Ruse_capital_letters/
use_lower_letters���* (Ruse_lower_letters$
use_numbers���� (Ruse_numbers9
use_special_characters��� (Ruse_special_charactersBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

