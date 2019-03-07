<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/6
 * Time: 下午2:11
 */
class Solution
{
    //最长连续递增子串
    //longest continuous increasing subsequence
    function findLCIS($nums)
    {
        $longest = 1;
        $mark = 0;
        for ($i = 1; $i < count($nums); ++$i) {
            if ($nums[$i - 1] >= $nums[$i])
                $mark = $i;
            $longest = $i - $mark + 1 > $longest ? $i - $mark + 1 : $longest;
        }
        return $longest;
    }

    //最长递增子串
    //longest increasing subsequence
    function findLIS($nums)//动态规划求解
    {
        $tmp = [1];
        $max = 1;
        for ($i = 1; $i < count($nums); ++$i) {
            $tmp[$i] = 1;
            for ($j = $i - 1; $j >=0; --$j) {
                if ($nums[$i] > $nums[$j]) {
                    $tmp[$i] = max($tmp[$i], $tmp[$j] + 1);
                }
            }
            $max = max($max, $tmp[$i]);
        }
        return $max;
    }


}