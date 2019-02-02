<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/2
 * Time: 下午10:59
 */

namespace Sago\Taop;


class C202
{
    //寻找数组中2个数的和为K，如果为多个返回一组即可

    /*
     * 方法一：
     * 采用前后指针遍历法
     * 如果数组有序，时间复杂度为O（N）
     * 如果无序，时间复杂度为O（NlogN+N）
     * 空间复杂度都为O（1）
     */
    function findSumK($arr, $k)
    {
        $this->quickSort($arr, 0, count($arr) - 1);
        $res = [];
        $forward = 0;
        $tail = count($arr) - 1;
        while ($tail > $forward) {
            $sum = $arr[$tail] + $arr[$forward];
            if ($sum == $k) {
                $res[] = $arr[$tail];
                $res[] = $arr[$forward];
                return $res;
            } elseif ($sum > $k) {
                $tail--;
            } else {
                $forward++;
            }
        }
        return "Not found!";
    }

    /*
     * 方法二：
     * 用sum减去数组每个元素，得到新数组
     * 再查找新数组元素是否在原数组中
     * 如果有则返回
     * 时间复杂度O（N）
     * 空间复杂度O（N）
     */
    function findSumK2($arr, $k)
    {
        $arr_remain = [];
        foreach ($arr as $value) {
            $arr_remain[$value] = $k - $value;
        }

        foreach ($arr_remain as $value => $remain) {
            if (in_array($remain, $arr)) {
                return $value . ' + ' . $remain;
            }
        }
        return "Not found!";
    }

    /*
     * 快速排序
     * 复杂度O（NlogN）
     */
    function quickSort(&$arr, $m, $n)
    {
        if (count($arr) <= 1) {
            return;
        }
        if (($n - $m) <= 1) {
            return;
        }
        $i = $j = $m;
        while ($j <= $n) {
            if ($j == $n) {
                $this->swap($arr, $i, $n);
                break;
            }
            if ($arr[$i] > $arr[$n]) {
                if ($arr[$j] < $arr[$n]) {
                    $this->swap($arr, $i, $j);
                    $i++;
                }
            } else {
                $i++;
            }
            $j++;
        }
        $this->quickSort($arr, $m, $i - 1);
        $this->quickSort($arr, $i + 1, $n);
    }

    function swap(&$arr, $i, $j)
    {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }

}