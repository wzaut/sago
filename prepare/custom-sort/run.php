<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/11
 * Time: 上午12:43
 */

require_once "CustomSort.php";

$class = new CustomSort();
$res = $class->sortCustom('acde', 'dba');

echo $res;