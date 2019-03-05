<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/5
 * Time: 下午4:37
 */

require_once "find2SortList.php";

$arr1 = [10, 8, 7, 6, 5, 4, 3, 2];
$arr2 = [12, 11, 9, 1];
$find = new find2SortList();
$find->findKth($arr1, $arr2, 0, 0, 8);

echo $find->res;


