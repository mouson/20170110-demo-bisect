<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2017/1/10
 * Time: 03:44
 */

namespace Mouson\Helpers\SequenceCalculator;

class DoubleSequenceCalculator implements CalculatorInterface
{

    /**
     * @param $value
     *
     * @return int|mixed
     */
    public function calculate($value)
    {
        return ($value * 2);
    }

    public function getSequenceName()
    {
        return 'Double';
    }
}