<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/23
 * Time: 下午7:27
 */
class Q33
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public $index = -1;

    function search($nums, $target)
    {
        $this->innerSearch($nums, 0, count($nums) - 1, $target);
        return $this->index;
    }

    function innerSearch($nums, $m, $n, $target)
    {
        if ($m > $n) return;
        $mid = $m + (($n - $m) >> 1);
        if ($nums[$mid] == $target) {
            $this->index = $mid;
            return;
        }
        if ($nums[$mid] > $nums[$m] || $nums[$mid] > $nums[$n]) {
            if ($target >= $nums[$m] && $target < $nums[$mid])
                $this->binarySearch($nums, $m, $mid - 1, $target);
            else
                $this->innerSearch($nums, $mid + 1, $n, $target);
        } else {
            if ($target > $nums[$mid] && $target <= $nums[$n])
                $this->binarySearch($nums, $mid + 1, $n, $target);
            else
                $this->innerSearch($nums, $m, $mid - 1, $target);
        }
    }

    function binarySearch($nums, $m, $n, $target)
    {
        if ($m > $n) return;
        $mid = $m + (($n - $m) >> 1);
        if ($nums[$mid] == $target) {
            $this->index = $mid;
            return;
        } elseif ($nums[$mid] < $target)
            $this->binarySearch($nums, $mid + 1, $n, $target);
        else
            $this->binarySearch($nums, $m, $mid - 1, $target);
    }

}

$nums = [3, 1];
$target = 1;
$clazz = new Q33();
$clazz->search($nums, $target);
echo $clazz->index;