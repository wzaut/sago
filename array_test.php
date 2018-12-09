<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/8
 * Time: 下午9:47
 */
require "./Arrays.php";

$array = new Arrays(5);

try {
    $array->insert(0, 'a');
    $array->insert(1, 'b');
    $array->insert(2, 'c');
    $array->insert(3, 'd');
    $array->insert(4, 'e');
    $array->insert(5, 'f');
    $array->insert(6, 'g');
} catch (Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "\r\n";
}


$array->printArray();