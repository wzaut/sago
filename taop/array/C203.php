<?php

namespace Sago\taop;
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/29
 * Time: 下午10:59
 */
class C203
{
    /*
     * 寻找和为定值的多个数
     *
     * 【解决方法】使用递归
     * 分为两种情况：如果取第n个数，即求前n-1个数满足和为sum-a[n-1]的问题
     *             如果不取第n个数，即求前n-1个数满足和为sum的问题
     */

    private $k = 0;

    private $res = [];


    function sumOfkNumber($array, $n, $sum)
    {
        //递归出口
        if ($sum <= 0 || $n <= 0) {
            return;
        }

        if ($sum == $array[$n - 1]) {
            for ($i = $this->k - 1; $i >= 0; --$i) {
                echo $this->res[$i] . " + ";
            }
            echo $array[$n - 1] . PHP_EOL;

        }

        //考虑是否取第n个数
        $this->res[$this->k++] = $array[$n - 1];
        $this->sumOfkNumber($array, $n - 1, $sum - $array[$n - 1]); //取第n个
        $this->k--;
        $this->sumOfkNumber($array, $n - 1, $sum); //不取第n个

    }
}