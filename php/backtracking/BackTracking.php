<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/1/7
 * Time: 上午11:15
 */

namespace Sago\Php;

class BackTracking
{
    private $minDist = PHP_INT_MAX;

    public function minDistBT($i, $j, $dist, $arr, $n)
    {
        error_log('i: ' . $i . 'j: ' . $j);

        if ($i == $n && $j == $n) {
            if ($dist < $this->minDist) {
                $this->minDist = $dist;
            }
            return;
        }
        if ($i < $n) {
            $this->minDistBT($i + 1, $j, $dist + $arr[$i][$j], $arr, $n);
        }

        if ($j < $n) {
            $this->minDistBT($i, $j + 1, $dist + $arr[$i][$j], $arr, $n);
        }

    }

    public function printMinDist()
    {
        return $this->minDist;
    }
}