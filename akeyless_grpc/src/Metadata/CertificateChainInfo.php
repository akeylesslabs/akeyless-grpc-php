<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/certificate_chain_info.proto

namespace Metadata;

class CertificateChainInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Metadata\SpecialTypes::initOnce();
        \Metadata\CertificateExpirationEvent::initOnce();
        \Metadata\CertificateInfo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#models/certificate_chain_info.protoakeyless_grpc)models/certificate_expiration_event.protomodels/certificate_info.proto"�
CertificateChainInfoP
certificate_chain裡� (2.akeyless_grpc.CertificateInfoRcertificate_chain2
certificate_format���� (	Rcertificate_formatD
certificate_has_private_key��ě (Rcertificate_has_private_keyO
!certificate_issuer_gw_cluster_url�� (	R!certificate_issuer_gw_cluster_urlB
certificate_issuer_item_id���� (Rcertificate_issuer_item_id<
certificate_issuer_name��� (	Rcertificate_issuer_name,
certificate_pem���� (	Rcertificate_pem1
certificate_status鸬v (	Rcertificate_status[
expiration_events��ۊ (2).akeyless_grpc.CertificateExpirationEventRexpiration_eventsBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP PPbproto3'
        , true);

        static::$is_initialized = true;
    }
}

