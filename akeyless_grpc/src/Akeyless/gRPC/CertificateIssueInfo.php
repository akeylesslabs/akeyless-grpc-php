<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/certificate_issue_info.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.CertificateIssueInfo</code>
 */
class CertificateIssueInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string cert_issuer_type = 62229661 [json_name = "cert_issuer_type"];</code>
     */
    protected $cert_issuer_type = '';
    /**
     * Generated from protobuf field <code>int64 max_ttl = 307578002 [json_name = "max_ttl"];</code>
     */
    protected $max_ttl = 0;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.PkiCertificateIssueDetails pki_cert_issuer_details = 83794362 [json_name = "pki_cert_issuer_details"];</code>
     */
    protected $pki_cert_issuer_details = null;
    /**
     * Generated from protobuf field <code>.akeyless_grpc.SshCertificateIssueDetails ssh_cert_issuer_details = 19599744 [json_name = "ssh_cert_issuer_details"];</code>
     */
    protected $ssh_cert_issuer_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cert_issuer_type
     *     @type int|string $max_ttl
     *     @type \Akeyless\gRPC\PkiCertificateIssueDetails $pki_cert_issuer_details
     *     @type \Akeyless\gRPC\SshCertificateIssueDetails $ssh_cert_issuer_details
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\CertificateIssueInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cert_issuer_type = 62229661 [json_name = "cert_issuer_type"];</code>
     * @return string
     */
    public function getCertIssuerType()
    {
        return $this->cert_issuer_type;
    }

    /**
     * Generated from protobuf field <code>string cert_issuer_type = 62229661 [json_name = "cert_issuer_type"];</code>
     * @param string $var
     * @return $this
     */
    public function setCertIssuerType($var)
    {
        GPBUtil::checkString($var, True);
        $this->cert_issuer_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 max_ttl = 307578002 [json_name = "max_ttl"];</code>
     * @return int|string
     */
    public function getMaxTtl()
    {
        return $this->max_ttl;
    }

    /**
     * Generated from protobuf field <code>int64 max_ttl = 307578002 [json_name = "max_ttl"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxTtl($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_ttl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.PkiCertificateIssueDetails pki_cert_issuer_details = 83794362 [json_name = "pki_cert_issuer_details"];</code>
     * @return \Akeyless\gRPC\PkiCertificateIssueDetails|null
     */
    public function getPkiCertIssuerDetails()
    {
        return $this->pki_cert_issuer_details;
    }

    public function hasPkiCertIssuerDetails()
    {
        return isset($this->pki_cert_issuer_details);
    }

    public function clearPkiCertIssuerDetails()
    {
        unset($this->pki_cert_issuer_details);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.PkiCertificateIssueDetails pki_cert_issuer_details = 83794362 [json_name = "pki_cert_issuer_details"];</code>
     * @param \Akeyless\gRPC\PkiCertificateIssueDetails $var
     * @return $this
     */
    public function setPkiCertIssuerDetails($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\PkiCertificateIssueDetails::class);
        $this->pki_cert_issuer_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.SshCertificateIssueDetails ssh_cert_issuer_details = 19599744 [json_name = "ssh_cert_issuer_details"];</code>
     * @return \Akeyless\gRPC\SshCertificateIssueDetails|null
     */
    public function getSshCertIssuerDetails()
    {
        return $this->ssh_cert_issuer_details;
    }

    public function hasSshCertIssuerDetails()
    {
        return isset($this->ssh_cert_issuer_details);
    }

    public function clearSshCertIssuerDetails()
    {
        unset($this->ssh_cert_issuer_details);
    }

    /**
     * Generated from protobuf field <code>.akeyless_grpc.SshCertificateIssueDetails ssh_cert_issuer_details = 19599744 [json_name = "ssh_cert_issuer_details"];</code>
     * @param \Akeyless\gRPC\SshCertificateIssueDetails $var
     * @return $this
     */
    public function setSshCertIssuerDetails($var)
    {
        GPBUtil::checkMessage($var, \Akeyless\gRPC\SshCertificateIssueDetails::class);
        $this->ssh_cert_issuer_details = $var;

        return $this;
    }

}

