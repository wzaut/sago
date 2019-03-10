<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/10
 * Time: 下午2:05
 */

require_once "BSFirstAppear.php";

$arr = [1, 2, 2, 3, 4, 5, 6, 7, 7, 7, 7, 7, 10];

$bsfa = new BSFirstAppear();
$res = $bsfa->bsfa($arr, 7);

echo $res;