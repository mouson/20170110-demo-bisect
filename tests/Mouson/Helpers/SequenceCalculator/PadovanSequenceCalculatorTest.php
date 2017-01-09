<?php

namespace Mouson\Helpers\SequenceCalculator;

use PHPUnit\Framework\TestCase;

class PadovanSequenceCalculatorTest extends TestCase
{

    public function test_測試巴多萬級數輸入0應得到0()
    {
        /** Arrange */
        $target = new PadovanSequenceCalculator();
        $value  = 0;

        /** Assume */
        $expected = 1;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    public function test_測試巴多萬級數輸入6應得到4()
    {
        /** Arrange */
        $target = new PadovanSequenceCalculator();
        $value  = 6;

        /** Assume */
        $expected = 4;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    public function test_測試巴多萬級數輸入30應得到49()
    {
        /** Arrange */
        $target = new PadovanSequenceCalculator();
        $value  = 15;

        /** Assume */
        $expected = 49;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }
}
