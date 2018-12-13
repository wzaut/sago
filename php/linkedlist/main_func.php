<?php

namespace Sago\Php;

require_once "LinkedList.php";
require_once "LinkedListFunc.php";
require_once "LinkedListNode.php";

require_once "../StatusCode.php";


$data = ['1', '3', '5', '7', '9', '11', '13'];

$node1 = new LinkedListNode($data[0]);
$node2 = new LinkedListNode($data[1]);
$node3 = new LinkedListNode($data[2]);
$node4 = new LinkedListNode($data[3]);
$node5 = new LinkedListNode($data[4]);
$node6 = new LinkedListNode($data[5]);
$node7 = new LinkedListNode($data[6]);

$data2 = ['2' , '4' , '6', '8'];
$node21 = new LinkedListNode($data2[0]);
$node22 = new LinkedListNode($data2[1]);
$node23 = new LinkedListNode($data2[2]);
$node24 = new LinkedListNode($data2[3]);

$list = new LinkedList();
$list->insertNode($list->head, $node1);
$list->insertNode($node1, $node2);
$list->insertNode($node2, $node3);
$list->insertNode($node3, $node4);
$list->insertNode($node4, $node5);
$list->insertNode($node5, $node6);
$list->insertNode($node6, $node7);
//$node7->next = $node2;

$list2 = new LinkedList();
$list2->insertNode($list2->head, $node21);
$list2->insertNode($node21, $node22);
$list2->insertNode($node22, $node23);
$list2->insertNode($node23, $node24);

$list->printList();
$list2->printList();

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
//$result = $list_func->reverse();
//var_dump($result);
//$list->printList();

/*
 * 是否带环
 */
echo PHP_EOL . ">>>>>>>>>>>>>>>>>>>>>>>>>>>是否带环>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
$result = $list_func->checkCircle();
var_dump($result);

/*
 * 两个链表有序合并
 */
echo PHP_EOL . ">>>>>>>>>>>>>>>>>>>>>>>>>>>有序合并>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
$sort_list = $list_func->mergeSortedList($list, $list2);
$sort_list->printList();
$func = new LinkedListFunc($sort_list);
$result = $func->checkCircle();
var_dump($result);
echo "length = " . $sort_list->length;

/*
 * 删除倒数第N个节点
 */
echo PHP_EOL . ">>>>>>>>>>>>>>>>>>>>>>>>>>>删除倒数第N个节点>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
$func->deleteLastNth(2);
$sort_list->printList();
echo "length = " . $sort_list->length;

/*
 * 寻找中间节点
 */
echo PHP_EOL . ">>>>>>>>>>>>>>>>>>>>>>>>>>>寻找中间节点>>>>>>>>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;
$mid_node = $func->findMidNode();
echo "mid node = " . $mid_node;

