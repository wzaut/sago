<?php


namespace Sago\Php;
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 18/12/19
 * Time: 上午10:56
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
        /*
        for ($i = 0; $i < $len - 1; ++$i) {
            $data = $arr[$i + 1];
            $flag = false;
            for ($j = $i; $j >= 0; --$j) {
                if ($data >= $arr[$j]) {
                    array_splice($arr, $i + 1, 1);
                    array_splice($arr, $j + 1, 0, $data);
                    $flag = true;
                    break;
                }
            }
            if (!$flag) {
                array_splice($arr, $i + 1, 1);
                array_splice($arr, 0, 0, $data);
            }

        }
        */

        return $arr;

    }

}