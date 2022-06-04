<?php

declare(strict_types=1);

namespace TimeSource;

abstract class AbstractTimeSource implements TimeSourceInterface
{
    public function today(): \DateTimeInterface
    {
        // \DateTimeImmutable::createFromInterface only available in PHP8.
        return (new \DateTimeImmutable())->setTimestamp($this->now()->getTimestamp())->setTime(0, 0);
    }
}
