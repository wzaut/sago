<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/13
 * Time: 下午10:03
 */
class OddEvenSort
{
    //给出一个数组奇数序号降序，偶数序号生序，重排成有序数组（小到大），时间复杂度O（N）
    function sortOddEven($arr)
    {
        $i = 0;
        $j = count($arr) - 1;
        if ($j & 1 == 0) {
            $j--;
        }
        $tmp = [];
        while ($i < count($arr) && $j > 0) {
            if ($arr[$i] < $arr[$j]) {
                $tmp[] = $arr[$i];
                $i += 2;
            } else {
                $tmp[] = $arr[$j];
                $j -= 2;
            }
        }

        if ($i >= count($arr)) {
            while ($j > 0) {
                $tmp[] = $arr[$j];
                $j -= 2;
            }
        } else {
            while ($i < count($arr)) {
                $tmp[] = $arr[$i];
                $i += 2;
            }
        }

        return $tmp;
    }
}