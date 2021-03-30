<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/arrow.proto

namespace Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions;

use UnexpectedValueException;

/**
 * Compression codec's supported by Arrow.
 *
 * Protobuf type <code>google.cloud.bigquery.storage.v1.ArrowSerializationOptions.CompressionCodec</code>
 */
class CompressionCodec
{
    /**
     * If unspecified no compression will be used.
     *
     * Generated from protobuf enum <code>COMPRESSION_UNSPECIFIED = 0;</code>
     */
    const COMPRESSION_UNSPECIFIED = 0;
    /**
     * LZ4 Frame (https://github.com/lz4/lz4/blob/dev/doc/lz4_Frame_format.md)
     *
     * Generated from protobuf enum <code>LZ4_FRAME = 1;</code>
     */
    const LZ4_FRAME = 1;

    private static $valueToName = [
        self::COMPRESSION_UNSPECIFIED => 'COMPRESSION_UNSPECIFIED',
        self::LZ4_FRAME => 'LZ4_FRAME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompressionCodec::class, \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions_CompressionCodec::class);
