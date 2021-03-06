<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.RangeQuery</code>
 */
class RangeQuery extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional string field_name = 1;</code>
     */
    private $field_name = '';
    private $has_field_name = false;
    /**
     * variant value
     *
     * Generated from protobuf field <code>optional bytes range_from = 2;</code>
     */
    private $range_from = '';
    private $has_range_from = false;
    /**
     * variant value
     *
     * Generated from protobuf field <code>optional bytes range_to = 3;</code>
     */
    private $range_to = '';
    private $has_range_to = false;
    /**
     * Generated from protobuf field <code>optional bool include_lower = 4;</code>
     */
    private $include_lower = false;
    private $has_include_lower = false;
    /**
     * Generated from protobuf field <code>optional bool include_upper = 5;</code>
     */
    private $include_upper = false;
    private $has_include_upper = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional string field_name = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * Generated from protobuf field <code>optional string field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;
        $this->has_field_name = true;

        return $this;
    }

    public function hasFieldName()
    {
        return $this->has_field_name;
    }

    /**
     * variant value
     *
     * Generated from protobuf field <code>optional bytes range_from = 2;</code>
     * @return string
     */
    public function getRangeFrom()
    {
        return $this->range_from;
    }

    /**
     * variant value
     *
     * Generated from protobuf field <code>optional bytes range_from = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRangeFrom($var)
    {
        GPBUtil::checkString($var, False);
        $this->range_from = $var;
        $this->has_range_from = true;

        return $this;
    }

    public function hasRangeFrom()
    {
        return $this->has_range_from;
    }

    /**
     * variant value
     *
     * Generated from protobuf field <code>optional bytes range_to = 3;</code>
     * @return string
     */
    public function getRangeTo()
    {
        return $this->range_to;
    }

    /**
     * variant value
     *
     * Generated from protobuf field <code>optional bytes range_to = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRangeTo($var)
    {
        GPBUtil::checkString($var, False);
        $this->range_to = $var;
        $this->has_range_to = true;

        return $this;
    }

    public function hasRangeTo()
    {
        return $this->has_range_to;
    }

    /**
     * Generated from protobuf field <code>optional bool include_lower = 4;</code>
     * @return bool
     */
    public function getIncludeLower()
    {
        return $this->include_lower;
    }

    /**
     * Generated from protobuf field <code>optional bool include_lower = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeLower($var)
    {
        GPBUtil::checkBool($var);
        $this->include_lower = $var;
        $this->has_include_lower = true;

        return $this;
    }

    public function hasIncludeLower()
    {
        return $this->has_include_lower;
    }

    /**
     * Generated from protobuf field <code>optional bool include_upper = 5;</code>
     * @return bool
     */
    public function getIncludeUpper()
    {
        return $this->include_upper;
    }

    /**
     * Generated from protobuf field <code>optional bool include_upper = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeUpper($var)
    {
        GPBUtil::checkBool($var);
        $this->include_upper = $var;
        $this->has_include_upper = true;

        return $this;
    }

    public function hasIncludeUpper()
    {
        return $this->has_include_upper;
    }

}

