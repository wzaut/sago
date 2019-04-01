<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/1
 * Time: 下午2:43
 */
class LCIS
{
    public $res = [];
    public $max = [];

    function lcis($arr, $n)
    {
        if ($n == count($arr)) {
            if (count($this->res) > count($this->max))
                $this->max = $this->res;
            return;
        }
        if ($arr[$n] > $arr[$n - 1] || $n == 0) {
            $this->res[] = $arr[$n];
        } else {
            if (count($this->res) > count($this->max))
                $this->max = $this->res;
            $this->res = [$arr[$n]];
        }
        $this->lcis($arr, $n + 1);
    }

}