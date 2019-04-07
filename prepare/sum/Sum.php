<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/7
 * Time: 下午1:17
 */
class Sum
{
    /*
        Given array nums = [-1, 0, 1, 2, -1, -4],

        A solution set is:
        [
            [-1, 0, 1],
            [-1, -1, 2]
        ]
     */
    public $res = [];

    function threeSum($arr)
    {
        sort($arr);
        for ($i = 0; $i < count($arr) - 2; ++$i) {
            if ($i != 0 && $arr[$i] == $arr[$i - 1]) //取重
                continue;
            $m = $i + 1;
            $n = count($arr) - 1;
            $target = -$arr[$i];
            while ($n > $m) {
                if ($arr[$m] + $arr[$n] == $target) {
                    $this->res[] = [$arr[$i], $arr[$m], $arr[$n]];
                    $m++;
                    $n--;
                    while ($n > $m && $arr[$m] == $arr[$m - 1]) $m++; //去重
                    while ($n > $m && $arr[$n] == $arr[$n + 1]) $n--; //去重
                } elseif (($arr[$m] + $arr[$n]) > $target) {
                    $n--;
                } else {
                    $m++;
                }
            }
        }

    }


}