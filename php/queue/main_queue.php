<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/15
 * Time: 下午12:11
 */
namespace Sago\Php;

require_once "Queue.php";
require_once "../linkedlist/LinkedListNode.php";
require_once "../StatusCode.php";

$data = [1, 2, 3, 4, 5];
$node1= new LinkedListNode($data[0]);
$node2= new LinkedListNode($data[1]);
$node3= new LinkedListNode($data[2]);
$node4= new LinkedListNode($data[3]);
$node5= new LinkedListNode($data[4]);


$queue = new Queue(4);
$queue->enqueue($node1);
$queue->enqueue($node2);
$queue->enqueue($node3);
$queue->enqueue($node4);
var_dump($queue->enqueue($node5));

echo ">>>>>>>>>>>>>>>>>>>>>>>>链式队列>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
$queue->printQueue();

$queue->dequeue();

$queue->printQueue();
