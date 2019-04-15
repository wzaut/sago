<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/13
 * Time: 下午5:25
 */
//数组中和等于sum的多个数
class MultiSum
{
    public $data = [];

    function sumMulti($arr, $n, $sum) {
        if ($n >= count($arr)) {
            return;
        }
        if ($sum == 0) {
            echo print_r($this->data, true);
            return;
        }
        $this->data[] = $arr[$n];
        $this->sumMulti($arr, $n + 1, $sum - $arr[$n]);
        array_pop($this->data);
        $this->sumMulti($arr, $n + 1, $sum);
    }

}