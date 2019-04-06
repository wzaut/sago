<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/6
 * Time: 下午8:10
 */
class HashFunc
{
    function time33($str, $len)
    {
        $hash = 5381;
        for ($i = 0; $i < $len; ++$i) {
            $hash += ($hash << 5) + ord($str[$i]);
        }
        return $hash & 0x7FFFFFFF; //0x7FFFFFFF为最大4字节带符号整数
    }
}