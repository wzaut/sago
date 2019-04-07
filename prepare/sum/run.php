<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/7
 * Time: 下午1:44
 */
require_once "Sum.php";

$class = new Sum();
$arr =[-1, 0, 1, 2, -1, -4, 0, 1];
$class->threeSum($arr);
echo print_r($class->res, true);