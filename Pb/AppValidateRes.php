<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ZMDev\Noxus\Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ZMDev.Noxus.pb.AppValidateRes</code>
 */
class AppValidateRes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool isValid = 1;</code>
     */
    private $isValid = false;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool isValid = 1;</code>
     * @return bool
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Generated from protobuf field <code>bool isValid = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsValid($var)
    {
        GPBUtil::checkBool($var);
        $this->isValid = $var;

        return $this;
    }

}

