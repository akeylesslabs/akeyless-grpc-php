<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/certificate_template_info.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.CertificateTemplateInfo</code>
 */
class CertificateTemplateInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string common_name = 314342308 [json_name = "common_name"];</code>
     */
    protected $common_name = '';
    /**
     * Generated from protobuf field <code>string country = 420960151 [json_name = "country"];</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string csr_cnf_base_64 = 532754765 [json_name = "csr_cnf_base_64"];</code>
     */
    protected $csr_cnf_base_64 = '';
    /**
     * Generated from protobuf field <code>string digest_algo = 308555797 [json_name = "digest_algo"];</code>
     */
    protected $digest_algo = '';
    /**
     * Generated from protobuf field <code>string locality = 290192742 [json_name = "locality"];</code>
     */
    protected $locality = '';
    /**
     * Generated from protobuf field <code>string organization = 105180469 [json_name = "organization"];</code>
     */
    protected $organization = '';
    /**
     * Generated from protobuf field <code>string province = 450614481 [json_name = "province"];</code>
     */
    protected $province = '';
    /**
     * Generated from protobuf field <code>bool self_signed_enabled = 113140337 [json_name = "self_signed_enabled"];</code>
     */
    protected $self_signed_enabled = false;
    /**
     * Generated from protobuf field <code>int64 ttl = 115180 [json_name = "ttl"];</code>
     */
    protected $ttl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $common_name
     *     @type string $country
     *     @type string $csr_cnf_base_64
     *     @type string $digest_algo
     *     @type string $locality
     *     @type string $organization
     *     @type string $province
     *     @type bool $self_signed_enabled
     *     @type int|string $ttl
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\CertificateTemplateInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string common_name = 314342308 [json_name = "common_name"];</code>
     * @return string
     */
    public function getCommonName()
    {
        return $this->common_name;
    }

    /**
     * Generated from protobuf field <code>string common_name = 314342308 [json_name = "common_name"];</code>
     * @param string $var
     * @return $this
     */
    public function setCommonName($var)
    {
        GPBUtil::checkString($var, True);
        $this->common_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 420960151 [json_name = "country"];</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 420960151 [json_name = "country"];</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string csr_cnf_base_64 = 532754765 [json_name = "csr_cnf_base_64"];</code>
     * @return string
     */
    public function getCsrCnfBase64()
    {
        return $this->csr_cnf_base_64;
    }

    /**
     * Generated from protobuf field <code>string csr_cnf_base_64 = 532754765 [json_name = "csr_cnf_base_64"];</code>
     * @param string $var
     * @return $this
     */
    public function setCsrCnfBase64($var)
    {
        GPBUtil::checkString($var, True);
        $this->csr_cnf_base_64 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string digest_algo = 308555797 [json_name = "digest_algo"];</code>
     * @return string
     */
    public function getDigestAlgo()
    {
        return $this->digest_algo;
    }

    /**
     * Generated from protobuf field <code>string digest_algo = 308555797 [json_name = "digest_algo"];</code>
     * @param string $var
     * @return $this
     */
    public function setDigestAlgo($var)
    {
        GPBUtil::checkString($var, True);
        $this->digest_algo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string locality = 290192742 [json_name = "locality"];</code>
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Generated from protobuf field <code>string locality = 290192742 [json_name = "locality"];</code>
     * @param string $var
     * @return $this
     */
    public function setLocality($var)
    {
        GPBUtil::checkString($var, True);
        $this->locality = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string organization = 105180469 [json_name = "organization"];</code>
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Generated from protobuf field <code>string organization = 105180469 [json_name = "organization"];</code>
     * @param string $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkString($var, True);
        $this->organization = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string province = 450614481 [json_name = "province"];</code>
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Generated from protobuf field <code>string province = 450614481 [json_name = "province"];</code>
     * @param string $var
     * @return $this
     */
    public function setProvince($var)
    {
        GPBUtil::checkString($var, True);
        $this->province = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool self_signed_enabled = 113140337 [json_name = "self_signed_enabled"];</code>
     * @return bool
     */
    public function getSelfSignedEnabled()
    {
        return $this->self_signed_enabled;
    }

    /**
     * Generated from protobuf field <code>bool self_signed_enabled = 113140337 [json_name = "self_signed_enabled"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSelfSignedEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->self_signed_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ttl = 115180 [json_name = "ttl"];</code>
     * @return int|string
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * Generated from protobuf field <code>int64 ttl = 115180 [json_name = "ttl"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkInt64($var);
        $this->ttl = $var;

        return $this;
    }

}

