<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/6
 * Time: 上午11:43
 */

namespace Sago\Php;

require_once "SnapSack.php";

$snap_sack = new SnapSack();
$snap_sack->bt(0, 0, 0);

$res = $snap_sack->dp();
echo $snap_sack->max_value;
echo PHP_EOL;
echo print_r($res, true);
