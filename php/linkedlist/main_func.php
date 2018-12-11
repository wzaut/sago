<?php


use Sago\Php\LinkedList;
use Sago\Php\LinkedListFunc;
use Sago\Php\LinkedListNode;

require_once "LinkedList.php";
require_once "LinkedListFunc.php";
require_once "LinkedListNode.php";


$data = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];

$node1 = new LinkedListNode($data[0]);
$node2 = new LinkedListNode($data[1]);
$node3 = new LinkedListNode($data[2]);
$node4 = new LinkedListNode($data[3]);
$node5 = new LinkedListNode($data[4]);
$node6 = new LinkedListNode($data[5]);
$node7 = new LinkedListNode($data[6]);

$list = new LinkedList();
$list->insertNode($list->head, $node1);
$list->insertNode($node1, $node2);
$list->insertNode($node2, $node3);
$list->insertNode($node3, $node4);
$list->insertNode($node4, $node5);
$list->insertNode($node5, $node6);
$list->insertNode($node6, $node7);

$list->printList();

$list_func = new LinkedListFunc();
$list_func->setList($list);

/*
 * 回文
 */
echo PHP_EOL . ">>>>>>>>>>>>>>>>>>>>>>>>>>>回文>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
$result = $list_func->isPalindrome();
var_dump($result);

/*
 * 反转
 */
echo PHP_EOL . ">>>>>>>>>>>>>>>>>>>>>>>>>>>反转>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
$result = $list_func->reverse();
var_dump($result);
$list->printList();







