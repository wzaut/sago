<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/26
 * Time: 下午3:10
 */

namespace Sago\Php;
require_once "DP.php";

$dp_class = new DP();
$sequences = [2, 9, 3, 6, 5, 1, 7];
$longest_sub_sequence = $dp_class->findLongestIncrSeq($sequences);

echo $longest_sub_sequence;