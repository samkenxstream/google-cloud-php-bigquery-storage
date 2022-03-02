<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/protobuf.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ProtoRows</code>
 */
class ProtoRows extends \Google\Protobuf\Internal\Message
{
    /**
     * A sequence of rows serialized as a Protocol Buffer.
     * See https://developers.google.com/protocol-buffers/docs/overview for more
     * information on deserializing this field.
     *
     * Generated from protobuf field <code>repeated bytes serialized_rows = 1;</code>
     */
    private $serialized_rows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $serialized_rows
     *           A sequence of rows serialized as a Protocol Buffer.
     *           See https://developers.google.com/protocol-buffers/docs/overview for more
     *           information on deserializing this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Protobuf::initOnce();
        parent::__construct($data);
    }

    /**
     * A sequence of rows serialized as a Protocol Buffer.
     * See https://developers.google.com/protocol-buffers/docs/overview for more
     * information on deserializing this field.
     *
     * Generated from protobuf field <code>repeated bytes serialized_rows = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSerializedRows()
    {
        return $this->serialized_rows;
    }

    /**
     * A sequence of rows serialized as a Protocol Buffer.
     * See https://developers.google.com/protocol-buffers/docs/overview for more
     * information on deserializing this field.
     *
     * Generated from protobuf field <code>repeated bytes serialized_rows = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSerializedRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->serialized_rows = $arr;

        return $this;
    }

}
