<?php

namespace Phpcodertop\UnitConversions\Tests;

use Phpcodertop\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.46, $lbs);
    }
}
