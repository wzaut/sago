<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/15
 * Time: 上午12:15
 */
class FindSumK
{
    private $data = [];

    private $i = 0;

    function findSumOfK($arr, $n, $k)
    {
        if ($n < 0 || $k <= 0) {
            return;
        }
        if ($k == $arr[$n]) {
            for ($j = 0; $j < $this->i; ++$j) { //此时i已经加过1
                echo $this->data[$j] . " ";
            }
            echo $arr[$n] . "\n"; //n没有放入data
        }
        $this->data[$this->i++] = $arr[$n];
        $this->findSumOfK($arr, $n - 1, $k - $arr[$n]);
        $this->i--;
        $this->findSumOfK($arr, $n - 1, $k);

    }

    public $res = [];
    public $tmp = [];

    function findSumK2($arr, $n, $sum)
    {
        if ($n >= count($arr))
            return;
        $this->tmp[] = $arr[$n];
        if ($arr[$n] == $sum)
            $this->res[] = $this->tmp;
        $this->findSumK2($arr, $n + 1, $sum - $arr[$n]);
        array_pop($this->tmp);
        $this->findSumK2($arr, $n + 1, $sum);
    }

}