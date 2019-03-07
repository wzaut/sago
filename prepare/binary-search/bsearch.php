<?php


class bsearch
{
    //search-in-rotated-sorted-array
    function bsearch_rsa($nums, $left, $right, $target)
    {
        if ($left > $right)
            return -1;
        $mid = $left + (($right - $left) >> 1);
        error_log($mid);
        if ($nums[$mid] == $target)
            return $mid;
        if ($nums[$mid] > $nums[$left]) {
            if ($nums[$left] == $target)
                return $left;
            elseif ($nums[$left] < $target)
                $this->bsearch_rsa($nums, $left + 1, $mid - 1, $target);
            else
                $this->bsearch_rsa($nums, $mid + 1, $right, $target);
        } else {
            if ($nums[$right] == $target)
                return $right;
            elseif ($nums[$right] > $target)
                $this->bsearch_rsa($nums, $mid + 1, $right - 1, $target);
            else
                $this->bsearch_rsa($nums, $left, $mid - 1, $target);
        }
    }

}