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
     * O(n^2)
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
     * O(n^2)
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
     * O(n^2)
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

    /*
     * 归并排序
     * O(nlogn)
     */
    public function merge_sort()
    {
        if (count($this->arr) < 2) {
            return StatusCode::ARRAY_COUNT_LESS_THAN_TWO;
        }

        $this->merge_sort_c($this->arr, 0, count($this->arr) - 1);

        return $this->arr;

    }

    private function merge_sort_c(&$arr, $start, $end)
    {
        //递归终止条件
        if ($start >= $end) {
            return;
        }
        $mid = ($start + $end) / 2;
        $mid = intval($mid);

        $B = array_slice($arr, 0, $mid + 1);
        $C = array_slice($arr, $mid + 1);

        //分治递归
        $this->merge_sort_c($B, 0, count($B) - 1);
        $this->merge_sort_c($C, 0, count($C) - 1);
        //合并
        $this->merge($arr, $B, $C);

    }

    /**
     * @param array $A
     * @param array $B
     * @param array $C
     *
     * 合并两个有序数组
     */
    private function merge(&$A, $B, $C)
    {
        $arrTmp = array();

        $b = count($B) - 1;
        $c = count($C) - 1;
        $i = 0;
        $j = 0;
        $k = 0;

        while ($i <= $b && $j <= $c) {
            if ($B[$i] > $C[$j]) {
                $arrTmp[$k] = $C[$j];
                $j++;
            } else {
                $arrTmp[$k] = $B[$i];
                $i++;
            }
            $k++;
        }

        if ($i > $b) {
            while ($j <= $c) {
                $arrTmp[$k] = $C[$j];
                $k++;
                $j++;
            }

        } else {
            while ($i <= $b) {
                $arrTmp[$k] = $B[$i];
                $k++;
                $i++;
            }
        }
        $A = $arrTmp;

    }

}