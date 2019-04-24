<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/24
 * Time: 下午4:05
 */
class Q59
{
    function generateMatrix($n)
    {
        $row1 = $col1 = 0;
        $row2 = $col2 = $n - 1;
        $value = 0;
        $res = [];
        while ($row2 >= $row1 && $col2 >= $col1) {
            for ($i = $col1; $i <= $col2; ++$i)
                $res[$row1][$i] = ++$value;
            $row1++;
            for ($i = $row1; $i <= $row2; ++$i)
                $res[$i][$col2] = ++$value;
            $col2--;
            if ($row2 >= $row1 && $col2 >= $col1) {
                for ($i = $col2; $i >= $col1; --$i)
                    $res[$row2][$i] = ++$value;
                $row2--;
                for ($i = $row2; $i >= $row1; --$i)
                    $res[$i][$col1] = ++$value;
                $col1++;
            }
        }
        for($i = 1; $i < count($res); ++$i) {
            ksort($res[$i]);
        }
        return $res;
    }
}

$clazz = new Q59();
$ans = $clazz->generateMatrix(3);
echo print_r($ans, true);