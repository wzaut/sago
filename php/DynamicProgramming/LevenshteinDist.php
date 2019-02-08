<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/7
 * Time: 下午9:53
 */

namespace Sago\Php;


class LevenshteinDist
{
    function levenshtein($A, $m, $B, $n)
    {
        $min_dist = [];
        for ($i = 0; $i < $m; ++$i) {
            if ($B[0] == $A[$i])
                $min_dist[$i][0] = $i;
            elseif ($i != 0)
                $min_dist[$i][0] = $min_dist[$i - 1][0] + 1;
            else
                $min_dist[$i][0] = 1;
        }

        for ($i = 1; $i < $n; ++$i) {
            if ($B[$i] == $A[0])
                $min_dist[0][$i] = $i;
            else
                $min_dist[0][$i] = $min_dist[0][$i - 1] + 1;
        }

        for ($i = 1; $i < $m; ++$i) {
            for ($j = 1; $j < $n; ++$j) {
                if ($A[$i] == $B[$j]) { //相同
                    $min_dist[$i][$j] = min($min_dist[$i - 1][$j], $min_dist[$i][$j - 1], $min_dist[$i - 1][$j - 1]);
                } else {
                    $min_dist[$i][$j] = min($min_dist[$i - 1][$j] + 1,
                        $min_dist[$i][$j - 1] + 1, $min_dist[$i - 1][$j - 1] + 1);
                }
            }
        }
        return $min_dist[$m - 1][$n - 1];
    }
}