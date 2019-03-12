<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/12
 * Time: 下午6:51
 */

require_once "FindMedian.php";

$find_median = new FindMedian();

$arr = [0, 1, 2, 3, 4, 5, 6, 7];
$res = $find_median->findMidNum($arr);

echo print_r($res, true);