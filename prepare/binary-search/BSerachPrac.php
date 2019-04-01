<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/1
 * Time: 下午4:12
 */
class BSerachPrac
{
    public $index;

    function solution($arr, $m, $n, $target)
    {
        if ($m > $n)
            $this->index = -1;
        $mid = $m + (($n - $m) >> 1);
        if ($arr[$mid] < $arr[$m]) { //小右情况
            if ($target > $arr[$mid] && $target <= $arr[$n])
                $this->bsearch($arr, $mid + 1, $n, $target);
            elseif ($target == $arr[$mid])
                $this->index = $mid;
            else
                $this->solution($arr, $m, $mid - 1, $target);
        } else { //大左情况
            if ($target >= $arr[$m] && $target < $arr[$mid])
                $this->bsearch($arr, $m, $mid - 1, $target);
            elseif ($target == $arr[$mid])
                $this->index = $mid;
            else
                $this->solution($arr, $mid + 1, $n, $target);
        }

    }

    function bsearch($arr, $m, $n, $target)
    {
        if ($m > $n)
            $this->index = -1;
        $mid = $m + (($n - $m) >> 1);
        if ($arr[$mid] > $target)
            $this->bsearch($arr, $m, $mid - 1, $target);
        elseif ($arr[$mid] < $target)
            $this->bsearch($arr, $mid + 1, $n, $target);
        else
            $this->index = $mid;
    }
}