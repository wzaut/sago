<?php

namespace Sago\Php;

require_once "SkipList.php";
require_once "IndexNode.php";
require_once "../linkedlist/LinkedList.php";
require_once "../linkedlist/LinkedListNode.php";
require_once "../StatusCode.php";

$linked_list = new LinkedList();

$data = [1, 2, 3, 4, 5, 6, 7, 8];

$node1 = new LinkedListNode($data[0]);
$node2 = new LinkedListNode($data[1]);
$node3 = new LinkedListNode($data[2]);
$node4 = new LinkedListNode($data[3]);
$node5 = new LinkedListNode($data[4]);
$node6 = new LinkedListNode($data[5]);
$node7 = new LinkedListNode($data[6]);
$node8 = new LinkedListNode($data[7]);

$linked_list->insertNode($linked_list->head, $node1);
$linked_list->insertNode($node1, $node2);
$linked_list->insertNode($node2, $node3);
$linked_list->insertNode($node3, $node4);
$linked_list->insertNode($node4, $node5);
$linked_list->insertNode($node5, $node6);
$linked_list->insertNode($node6, $node7);
$linked_list->insertNode($node7, $node8);

$linked_list->printList();
echo $linked_list->getLength();
$skip_list = new SkipList($linked_list);
echo PHP_EOL . $skip_list->getIndexLvl();