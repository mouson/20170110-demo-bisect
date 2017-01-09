<?php

namespace Mouson\Helpers\SequenceCalculator;
use PHPUnit\Framework\TestCase;

class FibonacciSequenceCalculatorTest extends TestCase
{
    public function test_測試費式級數輸入0應得到0()
    {
        /** Arrange */
        $target = new FibonacciSequenceCalculator();
        $value  = 0;

        /** Assume */
        $expected = 0;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    public function test_測試費式級數輸入6應得到8()
    {
        /** Arrange */
        $target = new FibonacciSequenceCalculator();
        $value  = 6;

        /** Assume */
        $expected = 8;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }
}
