<?php

namespace Tests;

use spekulatius;
use PHPUnit\Framework\TestCase;

final class MetaCharsetTest extends TestCase
{
    /**
     * @test
     */
    public function testMissingCharset()
    {
        $web = new \spekulatius\phpscraper();

        // Navigate to the test page.
        $web->go('https://test-pages.phpscraper.de/meta/missing.html');

        // Check the charset as not given (null)
        $this->assertSame(null, $web->charset);
    }

    /**
     * @test
     */
    public function testProvided()
    {
        $web = new \spekulatius\phpscraper();

        // Navigate to the test page.
        $web->go('https://test-pages.phpscraper.de/meta/lorem-ipsum.html');

        // Check the charset
        $this->assertSame('utf-8', $web->charset);
    }
}
