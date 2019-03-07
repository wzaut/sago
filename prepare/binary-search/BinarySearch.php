<?php


class BinarySearch
{
    public $final_index = -1;

    //search-in-rotated-sorted-array
    function bsearch_rsa($nums, $left, $right, $target)
    {
        if ($left > $right)
            return;
        $mid = $left + (($right - $left) >> 1);
        error_log("left:" . $left . " right:" . $right . " mid:" . $mid);
        if ($nums[$mid] == $target) {
            $this->final_index = $mid;
            return;
        }
        if ($nums[$mid] > $nums[$left]) { //mid左侧是严格递增的
            if ($nums[$left] <= $target && $target < $nums[$mid]) {//target在左侧
                $this->bSearch($nums, $left, $mid - 1, $target);
            } else {
                $this->bsearch_rsa($nums, $mid + 1, $right, $target);
            }
        } else { //mid右侧是严格递增的
            if ($nums[$mid] < $target && $target <= $nums[$right]) //target在右侧
                $this->bSearch($nums, $mid + 1, $right, $target);
            else
                $this->bsearch_rsa($nums, $left, $mid - 1, $target);
        }
    }

    function bSearch($nums, $left, $right, $target)
    {
        while ($right >= $left) {
            $mid = $left + (($right - $left) >> 1);
            if ($target == $nums[$mid]) {
                $this->final_index = $mid;
                break;
            } elseif ($target > $nums[$mid]) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
    }

}