<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/profiles/v1development/profiles.proto

namespace Opentelemetry\Proto\Profiles\V1development;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValueType describes the type and units of a value, with an optional aggregation temporality.
 *
 * Generated from protobuf message <code>opentelemetry.proto.profiles.v1development.ValueType</code>
 */
class ValueType extends \Google\Protobuf\Internal\Message
{
    /**
     * Index into string table.
     *
     * Generated from protobuf field <code>int32 type_strindex = 1;</code>
     */
    protected $type_strindex = 0;
    /**
     * Index into string table.
     *
     * Generated from protobuf field <code>int32 unit_strindex = 2;</code>
     */
    protected $unit_strindex = 0;
    /**
     * Generated from protobuf field <code>.opentelemetry.proto.profiles.v1development.AggregationTemporality aggregation_temporality = 3;</code>
     */
    protected $aggregation_temporality = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type_strindex
     *           Index into string table.
     *     @type int $unit_strindex
     *           Index into string table.
     *     @type int $aggregation_temporality
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Profiles\V1Development\Profiles::initOnce();
        parent::__construct($data);
    }

    /**
     * Index into string table.
     *
     * Generated from protobuf field <code>int32 type_strindex = 1;</code>
     * @return int
     */
    public function getTypeStrindex()
    {
        return $this->type_strindex;
    }

    /**
     * Index into string table.
     *
     * Generated from protobuf field <code>int32 type_strindex = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTypeStrindex($var)
    {
        GPBUtil::checkInt32($var);
        $this->type_strindex = $var;

        return $this;
    }

    /**
     * Index into string table.
     *
     * Generated from protobuf field <code>int32 unit_strindex = 2;</code>
     * @return int
     */
    public function getUnitStrindex()
    {
        return $this->unit_strindex;
    }

    /**
     * Index into string table.
     *
     * Generated from protobuf field <code>int32 unit_strindex = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUnitStrindex($var)
    {
        GPBUtil::checkInt32($var);
        $this->unit_strindex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.profiles.v1development.AggregationTemporality aggregation_temporality = 3;</code>
     * @return int
     */
    public function getAggregationTemporality()
    {
        return $this->aggregation_temporality;
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.profiles.v1development.AggregationTemporality aggregation_temporality = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAggregationTemporality($var)
    {
        GPBUtil::checkEnum($var, \Opentelemetry\Proto\Profiles\V1development\AggregationTemporality::class);
        $this->aggregation_temporality = $var;

        return $this;
    }

}
