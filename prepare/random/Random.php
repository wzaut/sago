<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/13
 * Time: 下午11:16
 */
class Random
{
    //给出rand5（）函数可以求出1～5中任意一个随机数，要求使用rand5（）求出rand7（）
    function rand5()
    {
        return rand(1, 5);
    }

    function rand7()
    {
        while (true) {
            $time5 = ($this->rand5() - 1) * 5;
            $rand5 = $this->rand5() - 1;
            $sum = $time5 + $rand5;
            if ($sum >= 1 && $sum <= 21) {
                return $sum % 7 + 1;
            }
        }
    }

}