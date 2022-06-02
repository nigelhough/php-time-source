<?php

declare(strict_types=1);

namespace TimeSource;

/**
 * A time source implementation that uses the PHP system time.
 */
class System implements TimeSourceInterface
{
    public function now(): \DateTimeInterface
    {
        return new \DateTimeImmutable();
    }
}
