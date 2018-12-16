<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/16
 * Time: 下午9:13
 */

namespace Sago\Php;

require_once "ArrayQueue.php";
require_once "../StatusCode.php";



$arr_queue = new ArrayQueue(4);

$arr_queue->enqueue(1);
$arr_queue->enqueue(2);
$arr_queue->enqueue(3);
$arr_queue->enqueue(4);

var_dump($arr_queue->enqueue(6));

$arr_queue->printArrQueue();

echo ">>>>>>>>>>>>>>after dequeue>>>>>>>>>>>>>>" . PHP_EOL;

$arr_queue->dequeue();

$arr_queue->printArrQueue();