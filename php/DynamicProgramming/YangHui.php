<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/6
 * Time: 下午7:23
 */

namespace Sago\Php;


class YangHui
{
    private $triangle = [
        1 => [5],
        2 => [7, 8],
        3 => [2, 3, 4],
        4 => [4, 9, 6, 1],
        5 => [2, 7, 9, 4, 5]
    ];

    function shortestWay($level)
    {
        $triangle = $this->triangle;
        $men[5] = $triangle[5];
        for ($i = $level - 1; $i >= 1; --$i) {
            for ($j = 0; $j < $i; ++$j) {
                $men[$i][$j] = min($men[$i + 1][$j], $men[$i + 1][$j + 1]) + $triangle[$i][$j];
            }
        }
        return $men[1];
    }
}