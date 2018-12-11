<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 18/12/7
 * Time: 下午2:15
 */

namespace Sago\Php;


class BM
{
    //$main=[a,b,a,c,b,b,a,b,c,d], $pattern=[a,b,c];
    public function bmSearch($main, $pattern)
    {
        //bad character rule
        $main_len = count($main);
        $pattern_len = count($pattern);
        if ($pattern_len > $main_len) {
            return -1;
        }
        $start = 0; //记录pattern移动后起始位置
        //start = 2;
        while ($start <= ($main_len - $pattern_len)) {
            $i = $start + $pattern_len - 1;
            //i=4
            $bad_char = -1;
            for (; $i >= $start; --$i) {
                if ($main[$i] != $pattern[$i - $start]) {
                    $bad_char = $i;
                    break;
                }

            }
            error_log('bad char:');
            error_log($bad_char);
            //如果没有坏字符则匹配成功直接返回开头位置
            if ($bad_char < 0) {
                error_log('found successfully!');
                return $start;
            }

            //$bad_char = $main[$bad_char];//b
            $index = -1;
            for ($j = $bad_char - 1 - $start; $j >= 0; --$j) {
                if ($pattern[$j] == $main[$bad_char]) {
                    $index = $j;
                    break;
                }
            }
            $start = $bad_char - $index;
        }
        return -1;

    }

}