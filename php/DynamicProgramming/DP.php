<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/26
 * Time: 下午1:28
 */

namespace Sago\Php;


class DP
{
    /*
     * 我们有一个数字序列包含 n 个不同的数字，如何求出这个序列中的最长递增子序列长度？
     * 比如2，9，3，6，5，1，7的最长递增子序列是2，3，5，7，所以最长递增子序列长度为4。
     */

    /*
     * 递推公式：
     * 第i个元素的最长子串=在i之前且比i小的元素的最长字串中的最大值+1
     * longest_sub_sequence->lss
     * lss(i) = max(lss(value[i] > value[0...i-1])) + 1
     */
    public function findLongestIncrSeq($sequences)
    {
        $len = count($sequences);
        if ($len <= 1) {
            return 1;
        }
        $arr = array_values($sequences);
        $longest_sub[0] = 1;
        for ($i = 1; $i < $len; ++$i) {
            $max_value = ~PHP_INT_MAX;
            for ($j = $i - 1; $j >= 0; --$j) {
                if ($arr[$i] > $arr[$j] && $longest_sub[$j] > $max_value) {
                    $max_value = $longest_sub[$j] + 1;
                }
            }
            if ($max_value == ~PHP_INT_MAX) {
                $longest_sub[$i] = 1;
            } else {
                $longest_sub[$i] = $max_value;
            }
        }
        $longest_sub_length = max($longest_sub);

        return $longest_sub_length;
    }
}