<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/13
 * Time: 下午11:24
 */
require_once "Random.php";

$random = new Random();
$res = $random->rand7();
echo $res;