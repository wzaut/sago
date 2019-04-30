<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k)
    {
        $this->buildHeap($nums, 1, $k);
        if ($nums[0] > $nums[1]) {
            $this->swap($nums, 0, 1);
            $this->heapify($nums, 1, $k);
        }
        for ($i = $k + 1; $i < count($nums); ++$i) {
            if ($nums[$i] > $nums[1]) {
                $this->swap($nums, $i, 1);
                $this->heapify($nums, 1, $k);
            }
        }
        return $nums[1];
    }

    function buildHeap(&$nums, $m, $n)
    {
        $mid = $m + (($n - $m) >> 1);
        for ($i = $mid; $i >= 1; --$i) {
            $this->heapify($nums, $i, $n);
        }
    }

    function heapify(&$nums, $i, $k)
    {
        while (true) {
            $min_pos = $i;
            if (2 * $i <= $k && $nums[2 * $i] < $nums[$i])
                $min_pos = 2 * $i;
            if (2 * $i + 1 <= $k && $nums[2 * $i + 1] < $nums[$min_pos])
                $min_pos = 2 * $i + 1;
            if ($min_pos == $i)
                break;
            $this->swap($nums, $i, $min_pos);
            $i = $min_pos;
        }
    }

    function swap(&$nums, $i, $j)
    {
        $tmp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $tmp;
    }
}

$nums = [3, 3, 1, 5, 6, 4];
$clazz = new Solution();
echo $clazz->findKthLargest($nums, 2);