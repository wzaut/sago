<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/7
 * Time: 上午11:52
 */

namespace Sago\Php;


use function PHPSTORM_META\map;

class DPMinDist
{
    private $map = [
        0 => [1, 3, 5, 9],
        1 => [2, 1, 3, 4],
        2 => [5, 2, 6, 7],
        3 => [6, 8, 4, 3]
    ];

    function minDistDP()
    {
        $dist = [];
        $map = $this->map;
        $dist[0][0] = $map[0][0];
        for ($i = 1; $i < count($map[0]); ++$i) {
            $dist[0][$i] = $map[0][$i] + $dist[0][$i - 1];
        }
        for ($i = 1; $i < count($map); ++$i) {
            $dist[$i][0] = $map[$i][0] + $dist[$i - 1][0];
        }
        for ($i = 1; $i < count($map[0]); ++$i) {
            for ($j = 1; $j < count($map); ++$j) {
                $dist[$i][$j] = min($dist[$i - 1][$j], $dist[$i][$j - 1]) + $map[$i][$j];
            }
        }
        return $dist[count($map) - 1][count($map[0]) - 1];
    }
}