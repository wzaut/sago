<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/7
 * Time: 下午6:51
 */
require_once "BinarySearch.php";

$bsearch = new BinarySearch();

$num = [8, 9, 12, 14, 16, 0, 1, 2, 3, 4, 5, 6, 7];
//$num = [8, 9, 12, 14, 16, 0, 1, 2, 3];
$target = 7;

$bsearch->bsearch_rsa($num, 0, 12, $target);

echo $bsearch->final_index;
