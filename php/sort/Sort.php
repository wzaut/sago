<?php


namespace Sago\Php;
/**
 * User: weizhe
 * 时间复杂度为O(n^2)的三个排序算法
 * 分别为: 冒泡,插入,选择
 */
class Sort
{
    private $arr;

    function __construct($arr)
    {
        $this->arr = $arr;
    }

    /*
     * 冒泡排序
     */
    public function bubble_sort()
    {
        if (count($this->arr) < 2) {
            return StatusCode::ARRAY_COUNT_LESS_THAN_TWO;
        }
        $arr = array_values($this->arr);
        //如果没有交换,提前退出标志
        $flag = false;
        for ($i = 0; $i < count($arr) - 1; ++$i) {
            for ($j = 0; $j < count($arr) - 1 - $i; ++$j) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                    $flag = true;
                }
            }
            //没有交换,表示已经排列好,提前退出
            if (!$flag) {
                break;
            }
        }

        return $arr;

    }

    /*
     * 插入排序
     */
    public function insertion_sort()
    {
        if (count($this->arr) < 2) {
            return StatusCode::ARRAY_COUNT_LESS_THAN_TWO;
        }

        $arr = array_values($this->arr);
        $len = count($arr);

        for ($i = 1; $i < $len; ++$i) {
            $value = $arr[$i];
            for ($j = $i - 1; $j >= 0; --$j) {
                if ($arr[$j] > $value) {
                    $arr[$j + 1] = $arr[$j];
                } else {
                    break;
                }
            }
            $arr[$j + 1] = $value;
        }

        return $arr;

    }

    /*
     * 选择排序
     */

    public function selection_sort()
    {
        if (count($this->arr) < 2) {
            return StatusCode::ARRAY_COUNT_LESS_THAN_TWO;
        }

        $arr = array_values($this->arr);
        $len = count($arr);

        for ($i = 0; $i < $len; ++$i) {
            $slice = array_slice($arr, $i);
            $min_value = min($slice);

            for ($j = $i; $j < $len; ++$j) {
                if ($arr[$j] == $min_value) {
                    unset($arr[$j]);
                    break;
                }
            }

            array_splice($arr, $i, 0, $min_value);

        }

        return $arr;
    }

}