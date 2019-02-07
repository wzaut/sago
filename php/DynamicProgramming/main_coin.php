<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/7
 * Time: 下午12:56
 */

namespace Sago\Php;
require_once "ChangeCoin.php";

$cc = new ChangeCoin();
$cc->changeCoinBT(0, 0);
echo $cc->min_amount;
echo PHP_EOL;
$res = $cc->changeCoinDP();
echo $res;