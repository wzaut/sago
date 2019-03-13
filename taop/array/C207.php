<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/4
 * Time: 下午2:34
 */

namespace Sago\Taop;

/*
 * 荷兰国旗问题
 *
 * 现有n个红白蓝三种不同颜色的小球，
 * 乱序排列在一起，请通过两两交换任意两个球，使得从左至右，
 * 依次是一些红球、一些白球、一些蓝球。
 */
class C207
{
    function sortRGB(&$arr)
    {
        if ($arr <= 1) {
            return;
        }

        $current = 0;
        $left = 0;
        $right = count($arr) - 1;
        while ($right > $current) {
            if ($arr[$current] == 0) {
                $this->swap($arr, $left, $current);
                $left++;
                $current++;
            } elseif ($arr[$current] == 1) {
                $current++;
            } else {
                $this->swap($arr, $current, $right);
                $right--;
            }
        }

    }

    function swap(&$arr, $m, $n)
    {
        $tmp = $arr[$m];
        $arr[$m] = $arr[$n];
        $arr[$n] = $tmp;
    }
}