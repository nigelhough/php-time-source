<?php

declare(strict_types=1);

namespace TimeSource;

use PHPUnit\Framework\TestCase;

final class FixedTest extends TestCase
{
    /**
     * @dataProvider dataNow
     */
    public function testNow(\DateTimeInterface $time): void
    {
        $this->assertSame($time, (new Fixed($time))->now());
    }

    public function dataNow(): \Generator
    {
        yield 'A DateTime' => [new \DateTime()];
        yield 'Another DateTime' => [new \DateTime('1969-07-20 12:34:56')];
        yield 'A DateTimeImmutable' => [new \DateTimeImmutable()];
    }
}
