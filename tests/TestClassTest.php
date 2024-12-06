<?php

namespace Tests\VendorOrProject;

use PHPUnit\Framework\TestCase;
use VendorOrProject\TestClass;

final class TestClassTest extends TestCase
{
    public function testSum(): void
    {
        $sut = new TestClass();

        self::assertEquals(4, $sut->sum(2, 2));
    }
}
