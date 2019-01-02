<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/27
 * Time: 下午10:17
 */

namespace Sago\Php;


/*
 * 线性排序算法
 * 复杂度O(n)
 */
class LinearSort
{
    private $arr;

    function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function counting_sort()
    {
        $n = count($this->arr);
        if ($n < 2) {
            return StatusCode::ARRAY_COUNT_LESS_THAN_TWO;
        }

        $arr = array_values($this->arr);

        $C = array();
        foreach ($arr as $value) {
            isset($C[$value]) ? $C[$value] += 1 : $C[$value] = 1;
        }
        ksort($C);
        end($C);
        $max_key_value = key($C);

        $D = array_fill(0, $max_key_value + 1, 0);
        foreach ($D as $key => $value) {
            $D[$key] = isset($C[$key]) ? $C[$key] : 0;
        }
        foreach ($D as $key => $value) {
            if ($key - 1 < 0) {
                continue;
            }
            $D[$key] = $D[$key - 1] + $value;
        }

        $final = array_fill(0, $n, 0);
        $arr = array_reverse($arr);
        foreach ($arr as $value) {
            $D[$value] -= 1;
            $final[$D[$value]] = $value;
        }

        return $final;
    }
}