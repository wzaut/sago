<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/7
 * Time: 下午12:03
 */
namespace Sago\Php;
require_once "DPMinDist.php";

$min_dist = new DPMinDist();
$res = $min_dist->minDistDP();

echo $res;
