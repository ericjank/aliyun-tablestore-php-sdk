<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.GeoBoundingBoxQuery</code>
 */
class GeoBoundingBoxQuery extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional string field_name = 1;</code>
     */
    private $field_name = '';
    private $has_field_name = false;
    /**
     * Generated from protobuf field <code>optional string top_left = 2;</code>
     */
    private $top_left = '';
    private $has_top_left = false;
    /**
     * Generated from protobuf field <code>optional string bottom_right = 3;</code>
     */
    private $bottom_right = '';
    private $has_bottom_right = false;

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
     * Generated from protobuf field <code>optional string top_left = 2;</code>
     * @return string
     */
    public function getTopLeft()
    {
        return $this->top_left;
    }

    /**
     * Generated from protobuf field <code>optional string top_left = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTopLeft($var)
    {
        GPBUtil::checkString($var, True);
        $this->top_left = $var;
        $this->has_top_left = true;

        return $this;
    }

    public function hasTopLeft()
    {
        return $this->has_top_left;
    }

    /**
     * Generated from protobuf field <code>optional string bottom_right = 3;</code>
     * @return string
     */
    public function getBottomRight()
    {
        return $this->bottom_right;
    }

    /**
     * Generated from protobuf field <code>optional string bottom_right = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBottomRight($var)
    {
        GPBUtil::checkString($var, True);
        $this->bottom_right = $var;
        $this->has_bottom_right = true;

        return $this;
    }

    public function hasBottomRight()
    {
        return $this->has_bottom_right;
    }

}

