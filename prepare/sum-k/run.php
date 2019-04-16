<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/15
 * Time: 上午12:30
 */
require_once "FindSumK.php";
$arr = [1, 3, 6, 4, 2, 7];
$find_sum_k = new FindSumK();
//$find_sum_k->findSumOfK($arr, 5, 7);

$find_sum_k->findSumK2($arr, 0, 7);
echo print_r($find_sum_k->res, true);