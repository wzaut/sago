<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/10
 * Time: 下午1:54
 */
class BSFirstAppear
{
    //find the first appearance of the element's index
    function bsfa($arr, $target)
    {
        $left = 0;
        $right = count($arr) - 1;
        while ($right >= $left) {
            $mid = $left + (($right - $left) >> 1);
            if ($target == $arr[$mid]) {
                if ($mid == 0 || $arr[$mid - 1] != $arr[$mid]) {
                    return $mid;
                } else {
                    $right = $mid - 1;
                }
            } elseif ($target < $arr[$mid]) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return -1;
    }

}