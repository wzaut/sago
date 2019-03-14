<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/14
 * Time: 下午12:31
 */
require_once "FindNextBig.php";

$arr = [10, 5, 6, 7, 2, 8];
$class = new FindNextBig();
$res = $class->findNextFirstBigOne($arr);
echo print_r($res, true);