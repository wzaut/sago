<?php

/*
    * 1、排序数组，返回所有绝对值不同的数的个数？
       如[-1,1,2]返回2
       [1,3,3,5]返回3
       要求：时间On，空间O1
    */
class AbsDiffValue
{
    public function countAbsValues($arr)
    {
        $sum = 0;
        $pre = 0;
        $tail = count($arr) - 1;
        while ($tail >= $pre) {
            if ($pre + 1 <= $tail && $arr[$pre] == $arr[$pre + 1])
                $pre++;
            elseif ($tail - 1 >= $pre && $arr[$tail] == $arr[$tail - 1])
                $tail--;
            else {
                if (abs($arr[$tail]) == abs($arr[$pre])) {
                    $sum++;
                    $pre++;
                    $tail--;
                } elseif (abs($arr[$tail]) > abs($arr[$pre])) {
                    $sum++;
                    $tail--;
                } else {
                    $sum++;
                    $pre++;
                }
            }
        }
        return $sum;
    }
}

$arr = [-3, -2, -2, -1, 0, 2, 3, 3, 15];
$clazz = new AbsDiffValue();
echo $clazz->countAbsValues($arr);