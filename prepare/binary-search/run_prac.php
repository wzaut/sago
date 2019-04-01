<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/1
 * Time: 下午4:19
 */
require_once "BSerachPrac.php";

$arr = [3, 4, 6, 9, 10, 1, 2];
$class = new BSerachPrac();
$class->solution($arr, 0, count($arr) - 1, 2);

echo $class->index;