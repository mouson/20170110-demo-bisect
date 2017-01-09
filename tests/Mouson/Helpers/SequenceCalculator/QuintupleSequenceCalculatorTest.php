<?php
namespace Mouson\Helpers\SequenceCalculator;
use PHPUnit\Framework\TestCase;

class QuintupleSequenceCalculatorTest extends TestCase
{
    public function test_物件產生後應可以取得物件名稱()
    {
        /** Arrange */
        $target = new QuintupleSequenceCalculator();

        /** Assume */
        $expected = 'Quintuple';

        /** Act */
        $actual = $target->getSequenceName();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

}
