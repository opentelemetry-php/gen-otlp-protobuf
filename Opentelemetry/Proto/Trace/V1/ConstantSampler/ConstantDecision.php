<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/trace/v1/trace_config.proto

namespace Opentelemetry\Proto\Trace\V1\ConstantSampler;

use UnexpectedValueException;

/**
 * How spans should be sampled:
 * - Always off
 * - Always on
 * - Always follow the parent Span's decision (off if no parent).
 *
 * Protobuf type <code>opentelemetry.proto.trace.v1.ConstantSampler.ConstantDecision</code>
 */
class ConstantDecision
{
    /**
     * Generated from protobuf enum <code>ALWAYS_OFF = 0;</code>
     */
    const ALWAYS_OFF = 0;
    /**
     * Generated from protobuf enum <code>ALWAYS_ON = 1;</code>
     */
    const ALWAYS_ON = 1;
    /**
     * Generated from protobuf enum <code>ALWAYS_PARENT = 2;</code>
     */
    const ALWAYS_PARENT = 2;

    private static $valueToName = [
        self::ALWAYS_OFF => 'ALWAYS_OFF',
        self::ALWAYS_ON => 'ALWAYS_ON',
        self::ALWAYS_PARENT => 'ALWAYS_PARENT',
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
class_alias(ConstantDecision::class, \Opentelemetry\Proto\Trace\V1\ConstantSampler_ConstantDecision::class);

