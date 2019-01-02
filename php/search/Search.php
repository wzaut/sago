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

}