<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/auth.proto

namespace Metadata;

class Auth
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
�
models/auth.protoakeyless_grpc"�
Auth 
	access_id���� (	R	access-id!

access_key���! (	R
access-key#
access_type��� (	Raccess-type!

account_idƾ� (	R
account-id$
admin_email䨾� (	Radmin-email)
admin_password܆�F (	Radmin-password 
	cert_dataτô (	R	cert-data
cloud_id���	 (	Rcloud-id
debugӬ�- (Rdebug$
gateway_url���� (	Rgateway-url%
gcp_audience�֕F (	Rgcp-audience
json��� (Rjson
jwtǹ (	Rjwt5
k8s_auth_config_name���H (	Rk8s-auth-config-name?
k8s_service_account_token頇( (	Rk8s-service-account-token
key_dataج�� (	Rkey-data(
ldap_password���� (	Rldap_password(
ldap_username���� (	Rldap_username\'
oci_auth_type���# (	Roci-auth-type*
oci_group_ocid�ﭳ (	Roci-group-ocid
	uid_token���u (	R	uid_tokenBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

