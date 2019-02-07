<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/26
 * Time: 下午3:10
 */

namespace Sago\Php;
require_once "DP.php";
require_once "DP1.php";

//$dp_class = new DP();
//$sequences = [1, 3, 6, 5, 7];
//$longest_sub_sequence = $dp_class->findLongestIncrSeq($sequences);
//echo $longest_sub_sequence . PHP_EOL;

$dp1_class = new DP1();
//$dp1_class->f1(0, 0);
//echo $dp1_class->max_value . PHP_EOL;
$arr = [2, 2, 4, 6, 3];
$res = $dp1_class->dp($arr);
$men = $dp1_class->dp1($arr);
echo print_r($res, true);
echo print_r($men, true);
