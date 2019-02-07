<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/7
 * Time: 下午12:41
 */

namespace Sago\Php;


class ChangeCoin
{
    public $min_amount = PHP_INT_MAX;

    function changeCoinBT($amount, $coin)
    {
        if ($coin == 9 && $amount < $this->min_amount) {
            $this->min_amount = $amount;
        }
        if ($coin + 1 <= 9) {
            $this->changeCoinBT($amount + 1, $coin + 1);
        }
        if ($coin + 3 <= 9) {
            $this->changeCoinBT($amount + 1, $coin + 3);
        }
        if ($coin + 5 <= 9) {
            $this->changeCoinBT($amount + 1, $coin + 5);
        }
    }

    function changeCoinDP()
    {
        $coin = [1, 3, 5];
        $dist[1][1] = 1;
        $dist[1][3] = 1;
        $dist[1][5] = 1;
        for ($i = 1; $i <= 9; ++$i) {
            for ($j = 1; $j <=9; ++$j) {
                if (isset($dist[$i][9])) {
                    return $i;
                }
                foreach ($coin as $value) {
                    if (isset($dist[$i][$j]) && $j + $value <= 9) {
                        $dist[$i + 1][$j + $value] = 1;
                    }
                }
            }
        }
        return -1;
    }

}