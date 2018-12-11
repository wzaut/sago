<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/8
 * Time: 下午9:47
 */
use Sago\Php\Arrays;
require_once "Arrays.php";

$array = new Arrays(5);

$array->insert(0, 'a');
$array->insert(0, 'b');
$array->insert(0, 'c');
$array->insert(1, 'd');
$array->insert(1, 'e');

$array->delete(1);
$array->delete(3);

echo $array->find(2) . "\r\n";


$array->printArray();