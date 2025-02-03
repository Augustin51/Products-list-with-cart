<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calculator = new Calculator();
        $this->assertEquals(15, $calculator->addition(10, 5));
        $this->assertEquals(5.1, $calculator->addition(4.4, 0.7));
        $this->assertEquals(-9, $calculator->addition(4, -13));
        $this->assertEquals(-9.3, $calculator->addition(-8.9, -0.4));
    }

    public function testSubtract() {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->subtract(10, 5));
        $this->assertEquals(5.1, $calculator->subtract(10.6, 5.5));
        $this->assertEquals(-11, $calculator->subtract(-10, 1));
        $this->assertEquals(-9.1, $calculator->subtract(-10.2, -1.1));
    }

    public function testTVA() {
        $calculator = new Calculator();
        $this->assertEquals(120, $calculator->computeTVA(100));
        $this->assertEquals(12, $calculator->computeTVA(10));
    }
}