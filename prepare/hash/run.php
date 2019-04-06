<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/6
 * Time: 下午8:13
 */

require_once "HashFunc.php";

$keys = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "11a"];
$hash_func = new HashFunc();
$mod = 8;
foreach ($keys as $key) {
    $hash = $hash_func->time33((string)$key, strlen($key));
    echo $hash . ": ";
    $index = $hash % ($mod - 1);
    echo $index . "\n";
}
