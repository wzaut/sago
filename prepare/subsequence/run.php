<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/6
 * Time: 下午2:22
 */

require_once "Solution.php";

$nums = [1, 3, 5, 4, 7, 8, 8, 9, 11];
$solution = new Solution();
$res = $solution->findLCIS($nums);


echo $res;

echo PHP_EOL;

$res = $solution->findLIS($nums);
echo $res;