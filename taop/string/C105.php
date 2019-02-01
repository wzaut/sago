<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/2/1
 * Time: 下午4:30
 */

namespace Sago\Taop;


class C105
{
    //找出字符串的最长回文子串的长度
    /*
     * 如字符串为<abacdcabbac>
     * 转化为奇数个<#a#b#a#c#d#c#a#b#b#a#c#>
     */
    function maxSubPalindrome($data)
    {
        $mx = 0;
        $id = 0;
        $palindrome = [0];
        for ($i = 1; $i < count($data); ++$i) {
            $palindrome[$i] = 0;
            $j = 1;
            if ($mx > $i && isset($palindrome[2 * $id - $i])) {
                $j = min($mx - $i, $palindrome[2 * $id - $i]);
            }
            while (isset($data[$i - $j]) && isset($data[$i + $j]) && $data[$i - $j] == $data[$i + $j]) {
                $palindrome[$i] = $j;
                if ($i + $j > $mx) {
                    $mx = $i + $j;
                    $id = $i;
                }
                $j++;
            }
        }

        return max($palindrome);
    }

}