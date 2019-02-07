<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/6
 * Time: 上午11:39
 */

namespace Sago\Php;


class SnapSack
{
    /*
     * 背包问题升级版：
     * 引入物品价值，
     * 在满足重量不超过最大值的前提下，
     * 使得物品总价值最大
     */
    private $item = [2, 2, 4, 6, 3];//重量
    private $value = [3, 4, 8, 9, 6];//价值
    private $max_weight = 9;
    public $max_value = 0;

    //用回溯解决
    function bt($n, $weight, $value)
    {
        if ($n == (count($this->item) - 1)) {
            if ($value > $this->max_value) {
                $this->max_value = $value;
            }
            return;
        }

        if ($value > $this->max_value) {
            $this->max_value = $value;
        }
        //不放n
        $this->bt($n + 1, $weight, $value);
        //放n
        if ($weight + $this->item[$n + 1] <= $this->max_weight) {
            $this->bt($n + 1, $weight + $this->item[$n + 1], $value + $this->value[$n + 1]);
        }
    }

    public $max_price = 0;

    //用动态规划求解
    function dp()
    {
        $weight = $this->item;
        $price = $this->value;
        $max_weight = $this->max_weight;
        $n = count($weight);
        $states[0] = 0;
        $states[$weight[0]] = $price[0];
        for ($i = 1; $i < $n; ++$i) {
            //放入
            for ($j = $max_weight - $weight[$i]; $j >= 0; --$j) { //从大到小遍历，避免本次循环结果干扰
                if (isset($states[$j])) {
                    $v = $states[$j] + $price[$i];
                    $old_v = isset($states[$j + $weight[$i]]) ? $states[$j + $weight[$i]] : 0;
                    if ($v > $old_v) {
                        $states[$j + $weight[$i]] = $v;
                    }
                }
            }
        }

        asort($states);
        return $states;


    }

}