<?php

namespace Sago\Php;

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/1
 * Time: 下午2:42
 */
class Search
{
    private $arr;

    function __construct($arr)
    {
        $this->arr = $arr;
    }

    //二分法查找
    //查找第一个值等于给定值的元素
    public function bsearch($target)
    {
        $arr = $this->arr;
        $n = count($arr);
        $low = 0;
        $high = $n - 1;
        while ($high >= $low) {
            $mid = $low + (($high - $low) >> 1); //通过位运算取mid
            if ($arr[$mid] < $target) {
                $low = $mid + 1;
            } elseif ($arr[$mid] > $target) {
                $high = $mid - 1;
            } else { //查找元素有多个，选择最左
                if ($mid == 0 || $arr[$mid] != $arr[$mid - 1]) {
                    return $mid;
                } else {
                    $high = $mid - 1;
                }
            }
        }

        return -1;
    }

    //查找最后一个值等于给定值的元素
    public function bsearch2($target)
    {
        $arr = $this->arr;
        $n = count($arr);
        $low = 0;
        $high = $n - 1;
        while ($high >= $low) {
            $mid = $low + (($high - $low) >> 1); //通过位运算取mid
            if ($arr[$mid] < $target) {
                $low = $mid + 1;
            } elseif ($arr[$mid] > $target) {
                $high = $mid - 1;
            } else {
                if ($mid == $n - 1 || $arr[$mid] != $arr[$mid + 1]) {
                    return $mid;
                } else {
                    $low = $mid + 1;
                }
            }
        }

        return -1;
    }

    //查找第一个大于等于给定值的元素
    public function bsearch3($target)
    {
        $arr = $this->arr;
        $n = count($arr);
        $low = 0;
        $high = $n - 1;
        if ($target > $arr[$high]) {
            return -1;
        }
        if ($target <= $arr[$low]) {
            return 0;
        }
        while ($high >= $low) {
            $mid = $low + (($high - $low) >> 1); //通过位运算取mid
            if ($arr[$mid] < $target) {
                $low = $mid + 1;
            } else {
                if ($target > $arr[$mid - 1] || $mid == 0) {
                    return $mid;
                }
                $high = $mid - 1;
            }
        }
    }

}