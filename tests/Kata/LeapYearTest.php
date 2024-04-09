<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\LeapYear;

class LeapYearTest extends TestCase
{
    private LeapYear $main;

    protected function setUp(): void
    {
        $this->main = new LeapYear();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->main->handle());
    }
}
