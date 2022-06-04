<?php

namespace TimeSource;

/**
 * Describes a time source.
 */
interface TimeSourceInterface
{
    public function now(): \DateTimeInterface;

    public function today(): \DateTimeInterface;
}
