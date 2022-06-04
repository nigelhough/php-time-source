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

    /**
     * @dataProvider dataDate
     */
    public function testDate(\DateTimeInterface $time, \DateTimeInterface $expected): void
    {
        $this->assertEquals($expected, (new Fixed($time))->today());
    }

    public function dataDate(): \Generator
    {
        yield 'A DateTime' => [new \DateTime('1969-07-20 12:34:56'), new \DateTime('1969-07-20')];
        yield 'Another DateTime' => [new \DateTime('1969-07-20 12:34:56'), new \DateTime('1969-07-20')];
        yield 'A DateTimeImmutable' => [
            new \DateTimeImmutable('2022-12-04 23:59:59'),
            new \DateTimeImmutable('2022-12-04'),
        ];
    }
}
