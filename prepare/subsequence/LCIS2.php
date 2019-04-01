<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/1
 * Time: 下午3:35
 */
class LCIS2
{
    //非递归实现
    function solution($arr)
    {
        $max = [];
        $res = [];
        for ($i = 0; $i < count($arr); ++$i) {
            if ($arr[$i] > $arr[$i - 1] || $i == 0) {
                $res[] = $arr[$i];
            } else {
                if (count($res) > count($max))
                    $max = $res;
                $res = [$arr[$i]];
            }

        }
        return $max;
    }

}