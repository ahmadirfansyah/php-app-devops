<?php

namespace Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertEquals(8, $this->calculator->add(5, 3));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(2, $this->calculator->subtract(5, 3));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(15, $this->calculator->multiply(5, 3));
    }

    public function testDivide(): void
    {
        $this->assertEquals(2.5, $this->calculator->divide(5, 2));
    }

    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(5, 0);
    }
}
