<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/vaultless_tokenizer_info.proto

namespace Metadata;

class VaultlessTokenizerInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Metadata\SpecialTypes::initOnce();
        \Metadata\EmailTokenizerInfo::initOnce();
        \Metadata\RegexpTokenizerInfo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%models/vaultless_tokenizer_info.protoakeyless_grpc!models/email_tokenizer_info.proto"models/regexp_tokenizer_info.proto"�
VaultlessTokenizerInfoY
email_tokenizer_info���� (2!.akeyless_grpc.EmailTokenizerInfoRemail_tokenizer_info
key_name���� (	Rkey_name\\
regexp_tokenizer_info�Ⲝ (2".akeyless_grpc.RegexpTokenizerInfoRregexp_tokenizer_info\'
template_type���U (	Rtemplate_type
tweak��4 (	Rtweak!

tweak_type��� (	R
tweak_typeBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP PPbproto3'
        , true);

        static::$is_initialized = true;
    }
}

