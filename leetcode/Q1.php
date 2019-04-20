<?php
/*
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.
 */
class Q1
{
    function twoSum($nums, $target)
    {
        $hash = [];
        for ($i = 0; $i < count($nums); ++$i) {
            $remain = $target - $nums[$i];
            if (isset($hash[$remain]))
                return [$hash[$remain], $i];
            $hash[$nums[$i]] = $i;
        }
        return [];
    }
}

$nums = [-10, -1, -18, -19];
$target = -19;

$clazz = new Q1();
$result = $clazz->twoSum($nums, $target);

echo print_r($result, true);