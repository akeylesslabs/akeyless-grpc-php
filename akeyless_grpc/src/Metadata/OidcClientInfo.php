<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/oidc_client_info.proto

namespace Metadata;

class OidcClientInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Metadata\SpecialTypes::initOnce();
        \Metadata\AccessOrGroupPermissionAssignment::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
models/oidc_client_info.protoakeyless_grpc2models/access_or_group_permission_assignment.proto"�
OidcClientInfox
access_permission_assignment��Ș (20.akeyless_grpc.AccessOrGroupPermissionAssignmentRaccess_permission_assignment
audience�ԛ� (	Raudience 
	client_id���� (	R	client_id#
grant_types��� (	Rgrant_types"

issuer_url�ũ� (	R
issuer_url#
logout_uris���8 (	Rlogout_uris
public���� (Rpublic\'
redirect_uris��� (	Rredirect_uris*
response_types���� (	Rresponse_types
scopes���� (	RscopesBQ
com.akeyless.grpcPZ.;akeyless_grpc�Akeyless.Grpc�Akeyless\\gRPC�MetadataP Pbproto3'
        , true);

        static::$is_initialized = true;
    }
}

