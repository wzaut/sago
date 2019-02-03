<?php

namespace Sago\Taop;
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/1/30
 * Time: 上午10:16
 */
class C204
{
    /*
     * 输入一个整形数组,数组里有正数和负数.
     * 数组中连续的一个或多个整数组成一个子数组,
     * 求子数组和的最大值.
     *
     * [复杂度要求]O(n)
     */

    /*
     * 通过暴力枚举法
     * 复杂度:O(n^3)不符合要求
     */
    function findMaxSubArr($array)
    {
        $len = count($array);

        $current_sum = 0;
        $max_sum = 0;
        for ($i = 0; $i < $len; ++$i) { //起始点
            for ($j = $i; $j < $len; ++$j) { //结束点
                for ($k = $i; $k <= $j; ++$k) { //开始到结尾累计求和
                    $current_sum += $array[$k];
                }

                if ($current_sum > $max_sum) {
                    $max_sum = $current_sum;
                }

                $current_sum = 0;
            }
        }

        return $max_sum;
    }

    /*
     * [解题关键]
     * current_sum为第n个节点的最大值,
     * 因要求子数组为*连续*的,
     * 所以当加入第n+1个节点时,
     * 需要判断current_sum+array[n+1]大还是array[n+1]大
     * 如果是前者则加上n+1
     * 是后者则将n+1设置为current_sum舍弃前面所有节点,再继续判断n+2...
     *
     * 负责度O(n)
     */
    //假设数组1, -2, 3, 10, -4, 7, 2, -5
    function findMaxSubArr2($array)
    {
        $current_sum = 0;
        $max_sum = $array[0];

        for ($i = 0; $i < count($array); ++$i) {
            $current_sum = $current_sum + $array[$i] > $array[$i] ? $current_sum + $array[$i] : $array[$i];
            $max_sum = $current_sum > $max_sum ? $current_sum : $max_sum;
        }

        return $max_sum;
    }

    //如果同时要求输出子段的开始和结束列?
    function findMaxSubArr3($arr)
    {
        $current_sum = [-1 => 0, 0 => $arr[0]];
        $length = [];

        for ($i = 0; $i < count($arr); ++$i) {
            if ($current_sum[$i - 1] + $arr[$i] > $arr[$i]) {
                $current_sum[$i] = $current_sum[$i - 1] + $arr[$i];
                $length[$i] = $length[$i - 1] + 1;
            } else {
                $current_sum[$i] = $arr[$i];
                $length[$i] = 1;
            }
        }
        $start = $end = -1;
        $max_value = max($current_sum);
        foreach ($current_sum as $index => $sum) {
            if ($sum == $max_value) {
                $start = $index - $length[$index] + 1;
                $end = $index;
            }
        }
        return $start . ' -> ' . $end;
    }

}