<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/16
 * Time: 下午12:53
 */
require_once "StackQueue.php";

$class = new StackQueue();
$class->enQueue(1);
$class->enQueue(2);
$class->enQueue(3);
echo $class->deQueue();
echo $class->deQueue();
echo $class->deQueue();
$class->enQueue(4);
$class->enQueue(5);
$class->enQueue(6);
echo $class->deQueue();

echo $class->count();