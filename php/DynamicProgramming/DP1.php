<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/5
 * Time: 下午12:30
 */

namespace Sago\Php;


class DP1
{
    //数据结构与算法之美 动态规划第一章
    /*
     * 对于一组不同重量、不可分割的物品，我们需要选择一些装入
     *
     * 在满足背包最大重量限制的前提下，背包中物品总重量的最大值是多...
     */
    public $max_value = ~PHP_INT_MAX;

    //物品的重量
    private $item = [11, 2, 2, 4, 10, 2];
    //物品的个数
    private $n = 5;
    //重量最大值
    private $max_weight = 9;


    //解法一：用回溯来求解
    function f1($item_index, $sum)
    {
        if ($item_index > $this->n - 1 || $sum == $this->max_weight) {
            return;
        }
        $sum += $this->item[$item_index];

        if ($sum <= $this->max_weight && $sum > $this->max_value) {
            $this->max_value = $sum;
        }
        $this->f1($item_index + 1, 0);
        if ($this->item[$item_index + 1] + $sum <= $this->max_value) {
            $this->f1($item_index + 1, $sum);
        }
    }

    //动态规划
    function dp($arr)
    {
        $max_weight = 9;
        $men[0][0] = 1;
        $men[0][$arr[0]] = 1;
        for ($i = 1; $i < count($arr); ++$i) {
            //不放入第i个数
            for ($j = 0; $j <= $max_weight; ++$j) {
                if (isset($men[$i - 1][$j]))
                    $men[$i][$j] = 1;
            }
            //放第i个数
            for ($j = 0; $j <= $max_weight; ++$j) {
                if (isset($men[$i - 1][$j]) && ($j + $arr[$i]) <= $max_weight)
                    $men[$i][$j + $arr[$i]] = 1;
            }
        }
        return $men;
    }

    //动态规划，降低空间复杂度
    //因为只有放入元素才会让sum产生变化
    function dp1($arr)
    {
        $men[0] = 1;
        $men[$arr[0]] = 1;
        for ($i = 1; $i < count($arr); ++$i) {
            for ($j = 0; $j <= $this->max_weight; ++$j) {
                if (isset($men[$j]) && ($arr[$i] + $j <= $this->max_weight)) {
                    $men[$arr[$i] + $j] = 1;
                }
            }
        }

        return $men;
    }

}