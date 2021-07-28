<?php

namespace Unit\Domain;

use App\Domain\DateTime;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class DateTimeTest extends TestCase
{
    /**
     * Tests if a datetime can be represented as a string.
     */
    public function testDateTimeCanBeRepresentedAsString(): void
    {
        $dateTime = new DateTime('2021-07-28 00:00:00');

        $this->assertSame('2021-07-28 00:00:00', (string) $dateTime);
    }
}
