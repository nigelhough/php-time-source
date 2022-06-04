<?php

declare(strict_types=1);

namespace TimeSource;

/**
 * A time source implementation that uses the PHP system time.
 */
class System extends AbstractTimeSource
{
    public function now(): \DateTimeInterface
    {
        return new \DateTimeImmutable();
    }
}
