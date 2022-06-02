<?php

declare(strict_types=1);

namespace TimeSource;

/**
 * A time source that always returns a fixed time.
 */
class Fixed implements TimeSourceInterface
{
    /** @var \DateTimeInterface */
    private $time;

    public function __construct(\DateTimeInterface $time)
    {
        $this->time = $time;
    }

    public function now(): \DateTimeInterface
    {
        return $this->time;
    }
}
