<?php

namespace Sago\Php;

require_once "LinkedList.php";
require_once "LinkedListNode.php";

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
$node5->next = $node1;

//$linked_list->insertNodePre($node5, $node7);

//$linked_list->insertHead(1);
//$linked_list->insertHead(2);
//$linked_list->insertHead(4);
//
//$linked_list->insert(2, 3);
//
//$linked_list->printList();
//
////$linked_list->delete(4);
//
////$linked_list->deleteTail();
//$linked_list->deleteHead();
////$linked_list->deleteHead();


$linked_list->printCircle();

//$linked_list->deleteNode($node5);
//
//$linked_list->deleteNode($node1);

//$linked_list->reverse();
//
//$linked_list->printList();

//$find = $linked_list->findNode(3);
//
//echo "Node found: " . $find . "\r\n";
//
//$pre_node = $linked_list->getPreNode($node5);

//echo "pre node :" . $pre_node->data . "\r\n";
$length = $linked_list->getLength();

echo "linked list length is " . $length . "\r\n";