<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/1
 * Time: 下午10:54
 */
require_once "Sort.php";

$arr = [4, 2, 6, 7, 9, 8, 5];
$sort_class = new Sort();
$sort_class->quickSort($arr);
echo print_r($arr, true);

$arr = [4, 2, 6, 19, 9, 8, 5];
$sort_class->mergeSort($arr);
echo print_r($arr, true);