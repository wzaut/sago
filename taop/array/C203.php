<?php

namespace Sago\Taop;
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


    function findMultiSumK($array, $n, $sum)
    {
        //递归出口
        if ($sum <= 0 || $n < 0) {
            return;
        }

        if ($sum == $array[$n]) {
            for ($i = $this->k - 1; $i >= 0; --$i) {
                echo $this->res[$i] . " + ";
            }
            echo $array[$n] . PHP_EOL;

        }

        //考虑是否取第n个数
        //取的话,将array[n]添加到res数组
        $this->res[$this->k++] = $array[$n];
        $this->findMultiSumK($array, $n - 1, $sum - $array[$n]);
        //如果不取的话,将res中的array[n]删掉
        $this->k--;
        $this->findMultiSumK($array, $n - 1, $sum);

    }
}