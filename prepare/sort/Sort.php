<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/1
 * Time: 下午10:50
 */
class Sort
{
    function quickSort(&$arr)
    {
        $m = 0;
        $n = count($arr) - 1;
        $this->partition($arr, $m, $n);
    }

    function partition(&$arr, $m, $n)
    {
        if ($m >= $n)
            return;
        $i = $j = $m;
        $pivot = $arr[$n];
        for (; $j < $n; ++$j) {
            if ($arr[$j] < $pivot) {
                $this->swap($arr, $i, $j);
                $i++;
            }
        }
        $this->swap($arr, $i, $n);
        $this->partition($arr, $m, $i - 1);
        $this->partition($arr, $i + 1, $n);
    }

    function swap(&$arr, $m, $n)
    {
        $tmp = $arr[$m];
        $arr[$m] = $arr[$n];
        $arr[$n] = $tmp;
    }

    function mergeSort(&$arr)
    {
        $this->separate($arr, 0, count($arr) - 1);
    }

    function separate(&$arr, $m, $n)
    {
        if ($m >= $n)
            return;
        $mid = $m + (($n - $m) >> 1);
        $this->separate($arr, $m, $mid);
        $this->separate($arr, $mid + 1, $n);
        $this->merge($arr, $m, $mid, $n);
    }

    function merge(&$arr, $m, $mid, $n)
    {
        $tmp = [];
        $i = $m;
        $j = $mid + 1;
        while ($i <= $mid && $j <= $n) {
            if ($arr[$i] < $arr[$j]) {
                $tmp[] = $arr[$i];
                $i++;
            } else {
                $tmp[] = $arr[$j];
                $j++;
            }
        }
        if ($i > $mid) {
            for (; $j <= $n; ++$j) {
                $tmp[] = $arr[$j];
            }
        } else {
            for (; $i <= $mid; ++$i) {
                $tmp[] = $arr[$i];
            }
        }
        $j = 0;
        for ($i = $m; $i <= $n; ++$i) {
            $arr[$i] = $tmp[$j];
            $j++;
        }
    }

}