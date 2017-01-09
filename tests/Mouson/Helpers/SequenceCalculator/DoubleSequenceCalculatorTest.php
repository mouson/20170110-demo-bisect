<?php
namespace Mouson\Helpers\SequenceCalculator;
use PHPUnit\Framework\TestCase;

class DoubleSequenceCalculatorTest extends TestCase
{
    public function test_物件產生後應可以取得物件名稱()
    {
        /** Arrange */
        $target = new DoubleSequenceCalculator();

        /** Assume */
        $expected = 'Double';

        /** Act */
        $actual = $target->getSequenceName();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    public function test_測試雙倍數列輸入0應回傳0()
    {
        /** Arrange */
        $target = new DoubleSequenceCalculator();
        $value  = 0;
        /** Assume */
        $expected = 0;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    public function test_測試雙倍數列輸入2應回傳4()
    {
        /** Arrange */
        $target = new DoubleSequenceCalculator();
        $value  = 2;
        /** Assume */
        $expected = 4;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    public function test_測試雙倍數列輸入負數應回傳兩倍負數()
    {
        /** Arrange */
        $target = new DoubleSequenceCalculator();
        $value  = -2;
        /** Assume */
        $expected = -4;

        /** Act */
        $actual = $target->calculate($value);

        /** Assert */
        $this->assertEquals($expected, $actual);
    }
}
