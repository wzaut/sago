<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/7
 * Time: 下午10:12
 */

namespace Sago\Php;

require_once "LevenshteinDist.php";

$lvst = new LevenshteinDist();
$A = ['m', 't', 'a', 'c', 'n', 'u'];
$m = 6;
$B = ['m', 'i', 't', 'c', 'm', 'u'];
$n = 6;

$res = $lvst->levenshtein($A, $m, $B, $n);
echo $res;