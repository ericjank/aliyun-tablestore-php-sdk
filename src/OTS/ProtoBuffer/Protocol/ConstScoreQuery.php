<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.ConstScoreQuery</code>
 */
class ConstScoreQuery extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Query filter = 1;</code>
     */
    private $filter = null;
    private $has_filter = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Query filter = 1;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\Query
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.Query filter = 1;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\Query $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\Query::class);
        $this->filter = $var;
        $this->has_filter = true;

        return $this;
    }

    public function hasFilter()
    {
        return $this->has_filter;
    }

}

