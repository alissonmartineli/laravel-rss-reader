<?php

namespace Tests\Unit\Domain;

use App\Domain\Link;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class LinkTest extends TestCase
{
    /**
     * Tests if creating an invalid link throws an exception.
     */
    public function testInvalidLinkThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new Link('this is not a url');
    }

    /**
     * Tests if a link can be represented as a string.
     */
    public function testUrlCanBeRepresentedAsString(): void
    {
        $url = new Link('https://google.com');
        $this->assertSame('https://google.com', (string) $url);
    }
}
