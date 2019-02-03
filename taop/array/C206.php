<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/31
 * Time: 上午12:10
 */

namespace Sago\Taop;


class C206
{
    //奇偶排序问题
    //给定一组数，使得奇数全部都排在偶数前面
    function oddEvenOrder(&$arr)
    {
        //结合快速排序的思路
        $len = count($arr);
        if ($len <= 1) {
            return;
        }
        $i = $j = 0;
        while ($j <= $len - 1) {
            if ($j == $len - 1) {
                $this->swap($arr, $i, $len - 1);
                break;
            }
            if (($arr[$i] & 1) == 1) {
                $i++;
            } else {
                if (($arr[$j] & 1) == 1) {
                    $this->swap($arr, $i, $j);
                    $i++;
                }
            }
            $j++;
        }

    }

    function swap(&$arr, $m, $n)
    {
        $tmp = $arr[$m];
        $arr[$m] = $arr[$n];
        $arr[$n] = $tmp;
    }

}