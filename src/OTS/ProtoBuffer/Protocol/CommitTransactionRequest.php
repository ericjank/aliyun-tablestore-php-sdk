<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.CommitTransactionRequest</code>
 */
class CommitTransactionRequest extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>required string transaction_id = 1;</code>
     */
    private $transaction_id = '';
    private $has_transaction_id = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>required string transaction_id = 1;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>required string transaction_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;
        $this->has_transaction_id = true;

        return $this;
    }

    public function hasTransactionId()
    {
        return $this->has_transaction_id;
    }

}

