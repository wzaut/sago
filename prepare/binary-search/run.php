<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/7
 * Time: 下午6:51
 */
require_once "bsearch.php";

$bsearch = new bsearch();

$num = [8, 9, 12, 14, 16, 0, 1, 2, 3, 4, 5, 6, 7];
$target = 6;

$res = $bsearch->bsearch_rsa($num, 0, 12, $target);

var_dump($res);
