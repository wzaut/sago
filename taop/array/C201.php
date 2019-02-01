<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/1
 * Time: 下午10:03
 */

namespace Sago\Taop;

//寻找最小第k个数
class C201
{
    //利用heap实现，维护一个容量为k的大顶堆
    function minKthValue(&$arr, $k)
    {
        //建堆
        //从第一个非叶子节点开始堆化
        $node = intval($k / 2);
        while ($node != 0) {
            if ($node * 2 + 1 <= $k) {
                if ($arr[$node] < $arr[$node * 2] || $arr[$node] < $arr[$node * 2 + 1]) {
                    if ($arr[$node * 2] > $arr[$node * 2 + 1]) {
                        $this->swap($arr, $node * 2, $node);
                    } else {
                        $this->swap($arr, $node * 2 + 1, $node);
                    }
                }
            } else {
                if ($arr[$node] < $arr[$node * 2]) {
                    $this->swap($arr, $node * 2, $node);
                }
            }
            $node--;
        }

        //判断剩余元素是否小于root
        if ($arr[0] < $arr[1]) {
            $this->swap($arr, 0, 1);
            $this->heapify($arr, 1, $k);
        }

        for ($i = $k + 1; $i < count($arr); ++$i) {
            if ($arr[$i] < $arr[1]) {
                $this->swap($arr, $i, 1);
                $this->heapify($arr, 1, $k);
            }
        }

        return $arr[1];
    }

    private function swap(&$arr, $m, $n)
    {
        $tmp = $arr[$m];
        $arr[$m] = $arr[$n];
        $arr[$n] = $tmp;
    }

    //交换root后，重新堆化操作
    private function heapify(&$arr, $node, $k)
    {
        while ($node * 2 <= $k) {
            if ($arr[$node * 2] > $arr[$node]) {
                $this->swap($arr, $node, $node * 2);
            } elseif ($node * 2 + 1 <= $k && $arr[$node * 2 + 1] > $arr[$node]) {
                $this->swap($arr, $node, $node * 2 + 1);
            } else {
                break;
            }
            $node *= 2;
        }
    }
}