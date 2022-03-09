<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function test_add_will_return_the_sum_of_its_parameters()
    {
        $sut = new Calculator();

        $this->assertEquals(8, $sut->add(5, 3));
        $this->assertEquals(5, $sut->add(5, 0));
    }
}

