<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/2/1
 * Time: 上午10:30
 */

namespace Sago\Taop;


class C102
{
    /*
     * 给定两个分别由字母组成的字符串A和B
     *
     * B的长度比A短
     *
     * 如何最快速度判断B中所有字母是否在A里
     *
     */

    private function hash($str)
    {
        $sequence = 0;
        foreach ($str as $alpha) {
            $sequence = $sequence | (1 << (ord($alpha) - ord('A')));
        }
        return $sequence;
    }

    //whether A contains all alpha in B
    function strContain($A, $B)
    {
        $hash = $this->hash($A);
        foreach ($B as $alpha) {
            $tmp = 1 << (ord($alpha) - ord('A'));
            if (($hash & $tmp) == 0) {
                return 0;
            }
        }

        return 1;
    }
}