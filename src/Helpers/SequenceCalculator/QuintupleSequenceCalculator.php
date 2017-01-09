<?php
/**
 * 五倍回傳計算數列
 */

namespace Mouson\Helpers\SequenceCalculator;

class QuintupleSequenceCalculator implements CalculatorInterface
{

    /**
     * @param $value
     *
     * @return int|mixed
     */
    public function calculate($value)
    {
        return ($value * 5);
    }

    public function getSequenceName()
    {
        return 'Quintuple';
    }
}