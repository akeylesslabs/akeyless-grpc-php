<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/regexp_tokenizer_info.proto

namespace Akeyless\gRPC;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>akeyless_grpc.RegexpTokenizerInfo</code>
 */
class RegexpTokenizerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Alphabet used for the tokenization
     *
     * Generated from protobuf field <code>string alphabet = 309913206 [json_name = "alphabet"];</code>
     */
    protected $alphabet = '';
    /**
     * Transformation to perform on the decrypted data
     *
     * Generated from protobuf field <code>string decoding_template = 493384465 [json_name = "decoding_template"];</code>
     */
    protected $decoding_template = '';
    /**
     * Transformation to perform on the encrypted data, if the required output template doesn't match the input string The output Should still be valid for the Pattern, otherwise the secret would be able to be decrypted.
     *
     * Generated from protobuf field <code>string encoding_template = 63758876 [json_name = "encoding_template"];</code>
     */
    protected $encoding_template = '';
    /**
     * Regexp pattern to extract and deposit the text/encdata
     *
     * Generated from protobuf field <code>string pattern = 254219377 [json_name = "pattern"];</code>
     */
    protected $pattern = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $alphabet
     *           The Alphabet used for the tokenization
     *     @type string $decoding_template
     *           Transformation to perform on the decrypted data
     *     @type string $encoding_template
     *           Transformation to perform on the encrypted data, if the required output template doesn't match the input string The output Should still be valid for the Pattern, otherwise the secret would be able to be decrypted.
     *     @type string $pattern
     *           Regexp pattern to extract and deposit the text/encdata
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\RegexpTokenizerInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * The Alphabet used for the tokenization
     *
     * Generated from protobuf field <code>string alphabet = 309913206 [json_name = "alphabet"];</code>
     * @return string
     */
    public function getAlphabet()
    {
        return $this->alphabet;
    }

    /**
     * The Alphabet used for the tokenization
     *
     * Generated from protobuf field <code>string alphabet = 309913206 [json_name = "alphabet"];</code>
     * @param string $var
     * @return $this
     */
    public function setAlphabet($var)
    {
        GPBUtil::checkString($var, True);
        $this->alphabet = $var;

        return $this;
    }

    /**
     * Transformation to perform on the decrypted data
     *
     * Generated from protobuf field <code>string decoding_template = 493384465 [json_name = "decoding_template"];</code>
     * @return string
     */
    public function getDecodingTemplate()
    {
        return $this->decoding_template;
    }

    /**
     * Transformation to perform on the decrypted data
     *
     * Generated from protobuf field <code>string decoding_template = 493384465 [json_name = "decoding_template"];</code>
     * @param string $var
     * @return $this
     */
    public function setDecodingTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->decoding_template = $var;

        return $this;
    }

    /**
     * Transformation to perform on the encrypted data, if the required output template doesn't match the input string The output Should still be valid for the Pattern, otherwise the secret would be able to be decrypted.
     *
     * Generated from protobuf field <code>string encoding_template = 63758876 [json_name = "encoding_template"];</code>
     * @return string
     */
    public function getEncodingTemplate()
    {
        return $this->encoding_template;
    }

    /**
     * Transformation to perform on the encrypted data, if the required output template doesn't match the input string The output Should still be valid for the Pattern, otherwise the secret would be able to be decrypted.
     *
     * Generated from protobuf field <code>string encoding_template = 63758876 [json_name = "encoding_template"];</code>
     * @param string $var
     * @return $this
     */
    public function setEncodingTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoding_template = $var;

        return $this;
    }

    /**
     * Regexp pattern to extract and deposit the text/encdata
     *
     * Generated from protobuf field <code>string pattern = 254219377 [json_name = "pattern"];</code>
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Regexp pattern to extract and deposit the text/encdata
     *
     * Generated from protobuf field <code>string pattern = 254219377 [json_name = "pattern"];</code>
     * @param string $var
     * @return $this
     */
    public function setPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->pattern = $var;

        return $this;
    }

}

