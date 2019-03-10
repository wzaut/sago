<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/11
 * Time: 上午12:20
 */
class CustomSort
{
    //determine whether given string sorted by custom string
    function sortCustom($str, $pattern)
    {
        $tmp = [];
        for ($i = 0; $i < strlen($pattern); ++$i) {
            $tmp[$pattern[$i]] = 1;
        }
        $filter = '';
        $count = [];
        for ($i = 0; $i < strlen($str); ++$i) {
            if (isset($tmp[$str[$i]])) {
                $filter .= $str[$i];
                $count[$str[$i]] = isset($count[$str[$i]]) ? $count[$str[$i]] : 0;
                $count[$str[$i]]++;
            }
        }
        $filter_sort = '';
        for ($i = 0; $i < strlen($pattern); ++$i) {
            for ($j = 0; $j < $count[$pattern[$i]]; ++$j) {
                $filter_sort .= $pattern[$i];
            }
        }

        error_log($filter);
        error_log($filter_sort);
        if ($filter_sort === $filter) {
            return 1;
        }
        return 0;
    }

}