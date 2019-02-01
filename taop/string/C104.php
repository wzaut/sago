<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/2/1
 * Time: 下午4:16
 */

namespace Sago\Taop;


class C104
{
    /*
     * 判断一个字符串是否为回文
     */
    function isPalindrome($str)
    {
        $forward = 0;
        $tail = count($str) - 1;
        while($tail > $forward) {
            if ($str[$forward] != $str[$tail]) {
                return 0;
            }
            $forward++;
            $tail--;
        }
        return 1;
    }

}