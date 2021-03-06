<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/trace/v1/trace.proto

namespace Opentelemetry\Proto\Trace\V1\Span;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event is a time-stamped annotation of the span, consisting of user-supplied
 * text description and key-value pairs.
 *
 * Generated from protobuf message <code>opentelemetry.proto.trace.v1.Span.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     * time_unix_nano is the time the event occurred.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 1;</code>
     */
    protected $time_unix_nano = 0;
    /**
     * name of the event.
     * This field is semantically required to be set to non-empty string.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * attributes is a collection of attribute key/value pairs on the event.
     * Attribute keys MUST be unique (it is not allowed to have more than one
     * attribute with the same key).
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.KeyValue attributes = 3;</code>
     */
    private $attributes;
    /**
     * dropped_attributes_count is the number of dropped attributes. If the value is 0,
     * then no attributes were dropped.
     *
     * Generated from protobuf field <code>uint32 dropped_attributes_count = 4;</code>
     */
    protected $dropped_attributes_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $time_unix_nano
     *           time_unix_nano is the time the event occurred.
     *     @type string $name
     *           name of the event.
     *           This field is semantically required to be set to non-empty string.
     *     @type \Opentelemetry\Proto\Common\V1\KeyValue[]|\Google\Protobuf\Internal\RepeatedField $attributes
     *           attributes is a collection of attribute key/value pairs on the event.
     *           Attribute keys MUST be unique (it is not allowed to have more than one
     *           attribute with the same key).
     *     @type int $dropped_attributes_count
     *           dropped_attributes_count is the number of dropped attributes. If the value is 0,
     *           then no attributes were dropped.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Trace\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * time_unix_nano is the time the event occurred.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 1;</code>
     * @return int|string
     */
    public function getTimeUnixNano()
    {
        return $this->time_unix_nano;
    }

    /**
     * time_unix_nano is the time the event occurred.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeUnixNano($var)
    {
        GPBUtil::checkUint64($var);
        $this->time_unix_nano = $var;

        return $this;
    }

    /**
     * name of the event.
     * This field is semantically required to be set to non-empty string.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name of the event.
     * This field is semantically required to be set to non-empty string.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * attributes is a collection of attribute key/value pairs on the event.
     * Attribute keys MUST be unique (it is not allowed to have more than one
     * attribute with the same key).
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.KeyValue attributes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * attributes is a collection of attribute key/value pairs on the event.
     * Attribute keys MUST be unique (it is not allowed to have more than one
     * attribute with the same key).
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.KeyValue attributes = 3;</code>
     * @param \Opentelemetry\Proto\Common\V1\KeyValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Common\V1\KeyValue::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * dropped_attributes_count is the number of dropped attributes. If the value is 0,
     * then no attributes were dropped.
     *
     * Generated from protobuf field <code>uint32 dropped_attributes_count = 4;</code>
     * @return int
     */
    public function getDroppedAttributesCount()
    {
        return $this->dropped_attributes_count;
    }

    /**
     * dropped_attributes_count is the number of dropped attributes. If the value is 0,
     * then no attributes were dropped.
     *
     * Generated from protobuf field <code>uint32 dropped_attributes_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDroppedAttributesCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->dropped_attributes_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Event::class, \Opentelemetry\Proto\Trace\V1\Span_Event::class);

