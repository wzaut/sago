<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/2/1
 * Time: 下午6:00
 */

namespace Sago\Taop;


class C106
{
    /*
     * 字符串的全排列
     */

    //递归实现
    private $res = [];

    function permutation(&$str, $m, $n)
    {
        if ($n <= 1) {
            return;
        }
        if ($m == $n) {
            $this->res[] = $str;
        }
        for ($i = $m; $i <= $n; ++$i) {
            $this->swap($str, $i, $m);
            $this->permutation($str, $m + 1, $n);
            $this->swap($str, $i, $m);
        }
    }

    function getRes()
    {
        return $this->res;
    }

    //交换数组元素
    private function swap(&$str, $a, $b)
    {
        if ($a < 0 || $a > count($str) - 1 || $b < 0 || $b > count($str) - 1) {
            return;
        }
        $tmp = $str[$a];
        $str[$a] = $str[$b];
        $str[$b] = $tmp;
    }

}