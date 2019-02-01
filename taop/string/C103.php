<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/2/1
 * Time: 上午11:13
 */

namespace Sago\Taop;


class C103
{
    //字符串转化成整数
    function strToInt($str)
    {
        $integer = 0;
        while (strlen($str) > 0) {
            $integer = $integer * 10 + (int)substr($str, 0, 1);
            $str = substr($str, 1);
        }

        return $integer;
    }

}