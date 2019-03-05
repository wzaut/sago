<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/5
 * Time: 下午3:24
 */

class find2SortList
{
    public $res = 0;

    function findKth($arr1, $arr2, $m, $n, $k)
    {
        if ($k == 1) {
            $this->res = max($arr1[$m], $arr2[$n]);
            return;
        }
        $len1 = count($arr1);
        $len2 = count($arr2);
        if ($m == $len1) {
            $this->res = $arr2[$n + $k - 1];
            return;
        }
        if ($n == $len2) {
            $this->res = $arr1[$m + $k - 1];
            return;
        }
        $mid_k = $k >> 1;
        $value1 = $mid_k > $len1 - $m ? $len1 - $m : $mid_k;
        $value2 = $mid_k > $len2 - $n ? $len2 - $n : $mid_k;
        if ($arr1[$value1 + $m - 1] >= $arr2[$value2 + $n - 1]) {
            $this->findKth($arr1, $arr2, $m + $value1, $n, $k - $value1);
        } else {
            $this->findKth($arr1, $arr2, $m, $n + $value2, $k - $value2);
        }
    }
}