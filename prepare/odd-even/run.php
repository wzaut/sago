<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/13
 * Time: 下午10:20
 */
require_once "OddEvenSort.php";

$arr = [1, 12, 3, 9, 5, 8, 7, 2, 10, 1];
$class = new OddEvenSort();
$res = $class->sortOddEven($arr);

echo print_r($res, true);