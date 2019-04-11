<?php

require_once "../linkedlist-add/Node.php";
require_once "LinkedList.php";

$node0 = new Node(8);
$node1 = new Node(1);
$node2 = new Node(6);
$node3 = new Node(3);
$node4 = new Node(4);
$node5 = new Node(55);
$node6 = new Node(2);
$node7 = new Node(77);
$node8 = new Node(0);

$node0->next = $node1;
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node5;
$node5->next = $node6;
$node6->next = $node7;
$node7->next = $node8;

$class = new LinkedList();
$head = $class->solution($node0);
$class->printList($head);
