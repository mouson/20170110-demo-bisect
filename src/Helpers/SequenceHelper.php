<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/7/13
 * Time: 上午7:57
 */

namespace Mouson\Helpers;

use Mouson\Helpers\SequenceCalculator\CalculatorInterface;

class SequenceHelper
{
    /**
     * @param $algorithm
     *
     * @return CalculatorInterface
     * @throws \Exception
     */
    static public function make($algorithm)
    {
        $helper = 'Mouson\\Helpers\\SequenceCalculator\\' . $algorithm .
                  "SequenceCalculator";
        if (! class_exists($helper)) {
            throw new \Exception('Class Not Found!!');
        }
        return new $helper;
    }
}