<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/12
 * Time: 下午5:01
 */
class FindMedian
{
    //无序数组中寻找中位数
    //解法一:排序后直接取;解法二:快排思想,分治;解法三:建堆
    function findMidNum($arr)
    {
        $mid = ceil(count($arr) / 2);
        $this->buildHeap($arr, $mid);//维护一个大顶堆
        if ($arr[0] < $arr[1]) {
            $this->swap($arr, 0, 1);
            $this->heapify($arr, 1, $mid);
        }
        for ($i = $mid + 1; $i < count($arr); ++$i) {
            if ($arr[$i] < $arr[1]) {
                $this->swap($arr, $i, 1);
                $this->heapify($arr, 1, $mid);
            }
        }
        return $arr;
    }

    //建大顶堆
    function buildHeap(&$arr, $end)
    {
        $mid = $end >> 1;
        for ($i = $mid; $i >= 1; --$i) {
            $this->heapify($arr, $i, $end);
        }
    }

    function heapify(&$arr, $i, $end) //从某一节点开始堆化
    {
        $max_pos = $i;
        while (true) {
            if (2 * $i + 1 <= $end && $arr[2 * $i + 1] > $arr[$max_pos])
                $max_pos = 2 * $i + 1;
            if (2 * $i <= $end && $arr[2 * $i] > $arr[$max_pos])
                $max_pos = 2 * $i;
            if ($max_pos == $i)
                break;
            $this->swap($arr, $i, $max_pos);
            $i = $max_pos; //继续沿节点向下堆化
        }
    }

    function swap(&$arr, $m, $n)
    {
        $tmp = $arr[$m];
        $arr[$m] = $arr[$n];
        $arr[$n] = $tmp;
    }
}