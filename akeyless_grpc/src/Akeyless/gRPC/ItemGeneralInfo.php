<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/item_general_info.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.ItemGeneralInfo</code>
 */
class ItemGeneralInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateIssueInfo cert_issue_details = 207496705 [json_name = "cert_issue_details"];</code>
     */
    protected $cert_issue_details = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateChainInfo certificate_chain_info = 201697517 [json_name = "certificate_chain_info"];</code>
     */
    protected $certificate_chain_info = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateTemplateInfo certificates_template_info = 62973939 [json_name = "certificates_template_info"];</code>
     */
    protected $certificates_template_info = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.ClassicKeyDetailsInfo classic_key_details = 247772213 [json_name = "classic_key_details"];</code>
     */
    protected $classic_key_details = null;
    /**
     * Generated from protobuf field <code>string cluster_gw_url = 158508934 [json_name = "cluster_gw_url"];</code>
     */
    protected $cluster_gw_url = '';
    /**
     * Generated from protobuf field <code>string display_metadata = 221229557 [json_name = "display_metadata"];</code>
     */
    protected $display_metadata = '';
    /**
     * Generated from protobuf field <code>.akeyless_grpc.DynamicSecretProducerInfo dynamic_secret_producer_details = 301488196 [json_name = "dynamic_secret_producer_details"];</code>
     */
    protected $dynamic_secret_producer_details = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.ImporterInfo importer_info = 376238661 [json_name = "importer_info"];</code>
     */
    protected $importer_info = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.OidcClientInfo oidc_client_info = 250004164 [json_name = "oidc_client_info"];</code>
     */
    protected $oidc_client_info = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.PasswordPolicyInfo password_policy = 500903084 [json_name = "password_policy"];</code>
     */
    protected $password_policy = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.RotatedSecretDetailsInfo rotated_secret_details = 326363063 [json_name = "rotated_secret_details"];</code>
     */
    protected $rotated_secret_details = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.SecureRemoteAccess secure_remote_access_details = 262183753 [json_name = "secure_remote_access_details"];</code>
     */
    protected $secure_remote_access_details = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.StaticSecretDetailsInfo static_secret_info = 208172174 [json_name = "static_secret_info"];</code>
     */
    protected $static_secret_info = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.TokenizerInfo tokenizer_info = 394048300 [json_name = "tokenizer_info"];</code>
     */
    protected $tokenizer_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Akeyless\gRPC\CertificateIssueInfo $cert_issue_details
     *     @type \Akeyless\gRPC\CertificateChainInfo $certificate_chain_info
     *     @type \Akeyless\gRPC\CertificateTemplateInfo $certificates_template_info
     *     @type \Akeyless\gRPC\ClassicKeyDetailsInfo $classic_key_details
     *     @type string $cluster_gw_url
     *     @type string $display_metadata
     *     @type \Akeyless\gRPC\DynamicSecretProducerInfo $dynamic_secret_producer_details
     *     @type \Akeyless\gRPC\ImporterInfo $importer_info
     *     @type \Akeyless\gRPC\OidcClientInfo $oidc_client_info
     *     @type \Akeyless\gRPC\PasswordPolicyInfo $password_policy
     *     @type \Akeyless\gRPC\RotatedSecretDetailsInfo $rotated_secret_details
     *     @type \Akeyless\gRPC\SecureRemoteAccess $secure_remote_access_details
     *     @type \Akeyless\gRPC\StaticSecretDetailsInfo $static_secret_info
     *     @type \Akeyless\gRPC\TokenizerInfo $tokenizer_info
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\ItemGeneralInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateIssueInfo cert_issue_details = 207496705 [json_name = "cert_issue_details"];</code>
     * @return \Akeyless\gRPC\CertificateIssueInfo|null
     */
    public function getCertIssueDetails()
    {
        return $this->cert_issue_details;
    }

    public function hasCertIssueDetails()
    {
        return isset($this->cert_issue_details);
    }

    public function clearCertIssueDetails()
    {
        unset($this->cert_issue_details);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateIssueInfo cert_issue_details = 207496705 [json_name = "cert_issue_details"];</code>
     * @param \Akeyless\gRPC\CertificateIssueInfo $var
     * @return $this
     */
    public function setCertIssueDetails($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\CertificateIssueInfo::class);
        $this->cert_issue_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateChainInfo certificate_chain_info = 201697517 [json_name = "certificate_chain_info"];</code>
     * @return \Akeyless\gRPC\CertificateChainInfo|null
     */
    public function getCertificateChainInfo()
    {
        return $this->certificate_chain_info;
    }

    public function hasCertificateChainInfo()
    {
        return isset($this->certificate_chain_info);
    }

    public function clearCertificateChainInfo()
    {
        unset($this->certificate_chain_info);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateChainInfo certificate_chain_info = 201697517 [json_name = "certificate_chain_info"];</code>
     * @param \Akeyless\gRPC\CertificateChainInfo $var
     * @return $this
     */
    public function setCertificateChainInfo($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\CertificateChainInfo::class);
        $this->certificate_chain_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateTemplateInfo certificates_template_info = 62973939 [json_name = "certificates_template_info"];</code>
     * @return \Akeyless\gRPC\CertificateTemplateInfo|null
     */
    public function getCertificatesTemplateInfo()
    {
        return $this->certificates_template_info;
    }

    public function hasCertificatesTemplateInfo()
    {
        return isset($this->certificates_template_info);
    }

    public function clearCertificatesTemplateInfo()
    {
        unset($this->certificates_template_info);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.CertificateTemplateInfo certificates_template_info = 62973939 [json_name = "certificates_template_info"];</code>
     * @param \Akeyless\gRPC\CertificateTemplateInfo $var
     * @return $this
     */
    public function setCertificatesTemplateInfo($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\CertificateTemplateInfo::class);
        $this->certificates_template_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.ClassicKeyDetailsInfo classic_key_details = 247772213 [json_name = "classic_key_details"];</code>
     * @return \Akeyless\gRPC\ClassicKeyDetailsInfo|null
     */
    public function getClassicKeyDetails()
    {
        return $this->classic_key_details;
    }

    public function hasClassicKeyDetails()
    {
        return isset($this->classic_key_details);
    }

    public function clearClassicKeyDetails()
    {
        unset($this->classic_key_details);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.ClassicKeyDetailsInfo classic_key_details = 247772213 [json_name = "classic_key_details"];</code>
     * @param \Akeyless\gRPC\ClassicKeyDetailsInfo $var
     * @return $this
     */
    public function setClassicKeyDetails($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\ClassicKeyDetailsInfo::class);
        $this->classic_key_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cluster_gw_url = 158508934 [json_name = "cluster_gw_url"];</code>
     * @return string
     */
    public function getClusterGwUrl()
    {
        return $this->cluster_gw_url;
    }

    /**
     * Generated from protobuf field <code>string cluster_gw_url = 158508934 [json_name = "cluster_gw_url"];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterGwUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_gw_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string display_metadata = 221229557 [json_name = "display_metadata"];</code>
     * @return string
     */
    public function getDisplayMetadata()
    {
        return $this->display_metadata;
    }

    /**
     * Generated from protobuf field <code>string display_metadata = 221229557 [json_name = "display_metadata"];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayMetadata($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.DynamicSecretProducerInfo dynamic_secret_producer_details = 301488196 [json_name = "dynamic_secret_producer_details"];</code>
     * @return \Akeyless\gRPC\DynamicSecretProducerInfo|null
     */
    public function getDynamicSecretProducerDetails()
    {
        return $this->dynamic_secret_producer_details;
    }

    public function hasDynamicSecretProducerDetails()
    {
        return isset($this->dynamic_secret_producer_details);
    }

    public function clearDynamicSecretProducerDetails()
    {
        unset($this->dynamic_secret_producer_details);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.DynamicSecretProducerInfo dynamic_secret_producer_details = 301488196 [json_name = "dynamic_secret_producer_details"];</code>
     * @param \Akeyless\gRPC\DynamicSecretProducerInfo $var
     * @return $this
     */
    public function setDynamicSecretProducerDetails($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\DynamicSecretProducerInfo::class);
        $this->dynamic_secret_producer_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.ImporterInfo importer_info = 376238661 [json_name = "importer_info"];</code>
     * @return \Akeyless\gRPC\ImporterInfo|null
     */
    public function getImporterInfo()
    {
        return $this->importer_info;
    }

    public function hasImporterInfo()
    {
        return isset($this->importer_info);
    }

    public function clearImporterInfo()
    {
        unset($this->importer_info);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.ImporterInfo importer_info = 376238661 [json_name = "importer_info"];</code>
     * @param \Akeyless\gRPC\ImporterInfo $var
     * @return $this
     */
    public function setImporterInfo($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\ImporterInfo::class);
        $this->importer_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.OidcClientInfo oidc_client_info = 250004164 [json_name = "oidc_client_info"];</code>
     * @return \Akeyless\gRPC\OidcClientInfo|null
     */
    public function getOidcClientInfo()
    {
        return $this->oidc_client_info;
    }

    public function hasOidcClientInfo()
    {
        return isset($this->oidc_client_info);
    }

    public function clearOidcClientInfo()
    {
        unset($this->oidc_client_info);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.OidcClientInfo oidc_client_info = 250004164 [json_name = "oidc_client_info"];</code>
     * @param \Akeyless\gRPC\OidcClientInfo $var
     * @return $this
     */
    public function setOidcClientInfo($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\OidcClientInfo::class);
        $this->oidc_client_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.PasswordPolicyInfo password_policy = 500903084 [json_name = "password_policy"];</code>
     * @return \Akeyless\gRPC\PasswordPolicyInfo|null
     */
    public function getPasswordPolicy()
    {
        return $this->password_policy;
    }

    public function hasPasswordPolicy()
    {
        return isset($this->password_policy);
    }

    public function clearPasswordPolicy()
    {
        unset($this->password_policy);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.PasswordPolicyInfo password_policy = 500903084 [json_name = "password_policy"];</code>
     * @param \Akeyless\gRPC\PasswordPolicyInfo $var
     * @return $this
     */
    public function setPasswordPolicy($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\PasswordPolicyInfo::class);
        $this->password_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.RotatedSecretDetailsInfo rotated_secret_details = 326363063 [json_name = "rotated_secret_details"];</code>
     * @return \Akeyless\gRPC\RotatedSecretDetailsInfo|null
     */
    public function getRotatedSecretDetails()
    {
        return $this->rotated_secret_details;
    }

    public function hasRotatedSecretDetails()
    {
        return isset($this->rotated_secret_details);
    }

    public function clearRotatedSecretDetails()
    {
        unset($this->rotated_secret_details);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.RotatedSecretDetailsInfo rotated_secret_details = 326363063 [json_name = "rotated_secret_details"];</code>
     * @param \Akeyless\gRPC\RotatedSecretDetailsInfo $var
     * @return $this
     */
    public function setRotatedSecretDetails($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\RotatedSecretDetailsInfo::class);
        $this->rotated_secret_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.SecureRemoteAccess secure_remote_access_details = 262183753 [json_name = "secure_remote_access_details"];</code>
     * @return \Akeyless\gRPC\SecureRemoteAccess|null
     */
    public function getSecureRemoteAccessDetails()
    {
        return $this->secure_remote_access_details;
    }

    public function hasSecureRemoteAccessDetails()
    {
        return isset($this->secure_remote_access_details);
    }

    public function clearSecureRemoteAccessDetails()
    {
        unset($this->secure_remote_access_details);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.SecureRemoteAccess secure_remote_access_details = 262183753 [json_name = "secure_remote_access_details"];</code>
     * @param \Akeyless\gRPC\SecureRemoteAccess $var
     * @return $this
     */
    public function setSecureRemoteAccessDetails($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\SecureRemoteAccess::class);
        $this->secure_remote_access_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.StaticSecretDetailsInfo static_secret_info = 208172174 [json_name = "static_secret_info"];</code>
     * @return \Akeyless\gRPC\StaticSecretDetailsInfo|null
     */
    public function getStaticSecretInfo()
    {
        return $this->static_secret_info;
    }

    public function hasStaticSecretInfo()
    {
        return isset($this->static_secret_info);
    }

    public function clearStaticSecretInfo()
    {
        unset($this->static_secret_info);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.StaticSecretDetailsInfo static_secret_info = 208172174 [json_name = "static_secret_info"];</code>
     * @param \Akeyless\gRPC\StaticSecretDetailsInfo $var
     * @return $this
     */
    public function setStaticSecretInfo($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\StaticSecretDetailsInfo::class);
        $this->static_secret_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.TokenizerInfo tokenizer_info = 394048300 [json_name = "tokenizer_info"];</code>
     * @return \Akeyless\gRPC\TokenizerInfo|null
     */
    public function getTokenizerInfo()
    {
        return $this->tokenizer_info;
    }

    public function hasTokenizerInfo()
    {
        return isset($this->tokenizer_info);
    }

    public function clearTokenizerInfo()
    {
        unset($this->tokenizer_info);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.TokenizerInfo tokenizer_info = 394048300 [json_name = "tokenizer_info"];</code>
     * @param \Akeyless\gRPC\TokenizerInfo $var
     * @return $this
     */
    public function setTokenizerInfo($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\TokenizerInfo::class);
        $this->tokenizer_info = $var;

        return $this;
    }

}

