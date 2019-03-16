<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/16
 * Time: 下午9:13
 */
class Binary
{
    function decimalToBinary($decimal)
    {
        $negative = 0;
        if ($decimal < 0) {
            $negative = 1;
            $decimal = -$decimal;
        }
        $str = '';
        while ($decimal >= 1) {
            $str = $decimal % 2 . $str;
            $decimal /= 2;
        }
        $len = strlen($str);
        for ($i = 32 - $len; $i > 0; --$i) {
            $str = '0' . $str;
        }

        if ($negative == 1) { //负数以补码的形式存在
            $i = 31;
            while ($i >= 0) {
                if ($str[$i] == '1') {
                    break;
                }
                $i--;
            }
            for ($j = $i -1; $j >= 0; --$j) {
                $str[$j] = $str[$j] == '1' ? '0' : '1';
            }
        }

        return $str;
    }

}