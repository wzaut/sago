<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/4
 * Time: 下午6:09
 */

namespace Sago\Taop;

//完美洗牌问题
/*
 * 有个长度为2n的数组{a1,a2,a3,...,an,b1,b2,b3,...,bn}，
 * 希望排序后{a1,b1,a2,b2,....,an,bn}，
 * 请考虑有无时间复杂度o(n)，空间复杂度0(1)的解法。
 */
class C209
{
    /*
     * 为了方便计算
     * 全局数组下表从1开始
     */
    function cycleLeader(&$arr, $from, $n)
    {
        $mod = 2 * $n + 1;
        for ($i = $from * 2 % $mod; $i != $from; $i = $i * 2 % $mod)
        {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$from];
            $arr[$from] = $tmp;
        }
    }
    //数组颠倒
    function reverse(&$arr, $start, $end)
    {
        if ($arr <= 1) {
            return;
        }
        if ($end <= $start) {
            return;
        }
        while ($end > $start) {
            $tmp = $arr[$start];
            $arr[$start] = $arr[$end];
            $arr[$end] = $tmp;
            $start++;
            $end--;
        }
    }

    //右旋转数组
    function rightRotate(&$arr, $start, $mid, $end)
    {
        $this->reverse($arr, $start, $mid);
        $this->reverse($arr, $mid + 1, $end);
        $this->reverse($arr, $start, $end);
    }
}