<?php
namespace Mouson\Helpers;

use PHPUnit\Framework\TestCase;

class SequenceHelperTest extends TestCase
{
    /**
     * @expectedException \Exception
     */
    public function test_無法找到演算法()
    {
        /** Arrange */
        $class_name = 'NotFound';

        /** Assume */

        /** Act */
        SequenceHelper::make($class_name);

        /** Assert */
    }

    public function test_無法找到演算法_without_annotation()
    {
        /** Arrange */
        $class_name = 'NotFound';

        /** Assume */
        $this->expectException(\Exception::class);
        
        /** Act */
        SequenceHelper::make($class_name);
        
        /** Assert */

    }


    public function test_生成費式數列應正常產生()
    {
        /** Arrange */
        $class_name = 'Fibonacci';

        /** Assume */
        $expected = 'Mouson\Helpers\SequenceCalculator\FibonacciSequenceCalculator';

        /** Act */
        $actual = SequenceHelper::make($class_name);

        /** Assert */
        $this->assertInstanceOf($expected, $actual);
    }
}
