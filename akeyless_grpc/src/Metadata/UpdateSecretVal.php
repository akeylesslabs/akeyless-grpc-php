<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/update_secret_val.proto

namespace Metadata;

class UpdateSecretVal
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
�
models/update_secret_val.protoakeyless_grpc"�
UpdateSecretVal\'
accessibility���e (	RaccessibilityV
custom_field㰓T (2/.akeyless_grpc.UpdateSecretVal.CustomFieldEntryRcustom-field
format���] (	Rformat"

inject_url��� (	R
inject-url
json��� (Rjson0
keep_prev_version���� (	Rkeep-prev-version
key߼ (	Rkey&
last_version��� (Rlast-version
	multiline���? (R	multiline
name��� (	Rname#
new_version�� (Rnew-version
password���D (	Rpassword
token���4 (	Rtoken 
	uid_token���� (	R	uid-token
username���~ (	Rusername
value�5 (	Rvalue2
CustomFieldEntry
key (	
value (	:8BQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

