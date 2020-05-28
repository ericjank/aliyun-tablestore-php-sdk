<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.FunctionScoreQuery</code>
 */
class FunctionScoreQuery extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Query query = 1;</code>
     */
    private $query = null;
    private $has_query = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.FieldValueFactor field_value_factor = 2;</code>
     */
    private $field_value_factor = null;
    private $has_field_value_factor = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Query query = 1;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\Query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Query query = 1;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\Query::class);
        $this->query = $var;
        $this->has_query = true;

        return $this;
    }

    public function hasQuery()
    {
        return $this->has_query;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.FieldValueFactor field_value_factor = 2;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\FieldValueFactor
     */
    public function getFieldValueFactor()
    {
        return $this->field_value_factor;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.FieldValueFactor field_value_factor = 2;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\FieldValueFactor $var
     * @return $this
     */
    public function setFieldValueFactor($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\FieldValueFactor::class);
        $this->field_value_factor = $var;
        $this->has_field_value_factor = true;

        return $this;
    }

    public function hasFieldValueFactor()
    {
        return $this->has_field_value_factor;
    }

}

