<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/ssh_certificate_issue_details.proto

namespace Metadata;

class SshCertificateIssueDetails
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
*models/ssh_certificate_issue_details.protoakeyless_grpc"�
SshCertificateIssueDetails,
allowed_domains���� (	Rallowed_domainsV
allowed_user_key_lengths�߱g (2.akeyless_grpc.MapInt64Rallowed_user_key_lengths\'
allowed_users���U (	Rallowed_users 
	cert_type���� (R	cert_typen
critical_options���� (2>.akeyless_grpc.SshCertificateIssueDetails.CriticalOptionsEntryRcritical_options\\

extensions��^ (29.akeyless_grpc.SshCertificateIssueDetails.ExtensionsEntryR
extensions"

principals���� (	R
principals(
static_key_id���� (	Rstatic_key_id6
CriticalOptionsEntry
key (	
value (	:81
ExtensionsEntry
key (	
value (	:8BQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP bproto3'
        , true);

        static::$is_initialized = true;
    }
}

