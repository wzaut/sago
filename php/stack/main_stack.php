<?php

namespace Sago\Php;


require_once "Stack.php";
require_once "../linkedlist/LinkedListNode.php";
require_once "../StatusCode.php";


echo ">>>>>>>>>>>>>>>>>>>>>>>>栈相关>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

$data = [1, 2, 3, 4];

$node1 = new LinkedListNode($data[0]);
$node2 = new LinkedListNode($data[1]);
$node3 = new LinkedListNode($data[2]);
$node4 = new LinkedListNode($data[3]);


$stack = new Stack(4);

$stack->push($node1);
$stack->push($node2);
$stack->push($node3);
$result = $stack->push($node4);
var_dump($result);

$result = $stack->pop();
var_dump($result);

$stack->printStack();

var_dump($stack->getCount());





