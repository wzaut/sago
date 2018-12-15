<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/15
 * Time: 下午4:27
 */

namespace Sago\Php;

use function Sodium\crypto_generichash_init;

require_once "CircleQueue.php";
require_once "../StatusCode.php";
require_once "../linkedlist/LinkedListNode.php";

$circle_queue = new CircleQueue(4);

$circle_queue->printCircleQueue();

echo ">>>>>>>>>>>>>>>>>>>>>>>入队操作>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

$circle_queue->enqueue(1);
$circle_queue->enqueue(2);
$circle_queue->enqueue(3);
$circle_queue->enqueue(4);
var_dump($circle_queue->enqueue(5));

$circle_queue->printCircleQueue();

echo ">>>>>>>>>>>>>>>>>>>>>>>出队操作>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

$circle_queue->dequeue();
$circle_queue->dequeue();

$circle_queue->printCircleQueue();

echo ">>>>>>>>>>>>>>>>>>>>>>>再入队>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

$circle_queue->enqueue(5);
$circle_queue->enqueue(6);

$circle_queue->printCircleQueue();

echo ">>>>>>>>>>>>>>>>>>>>>>>再出队>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

$circle_queue->dequeue();

$circle_queue->printCircleQueue();