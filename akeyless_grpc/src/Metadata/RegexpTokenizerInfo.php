<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/regexp_tokenizer_info.proto

namespace Metadata;

class RegexpTokenizerInfo
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
"models/regexp_tokenizer_info.protoakeyless_grpc"�
RegexpTokenizerInfo
alphabet��� (	Ralphabet0
decoding_template��� (	Rdecoding_template/
encoding_template�ĳ (	Rencoding_template
pattern�y (	RpatternBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

