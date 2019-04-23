<?php

require_once "ListNode.php";

class Q21
{
    function mergeTwoLists($l1, $l2)
    {
        $head = new ListNode(null);
        $cur = $head;
        while ($l1 != null && $l2 != null) {
            if ($l1->val > $l2->val) {
                $cur->next = $l2;
                $l2 = $l2->next;
            } else {
                $cur->next = $l1;
                $l1 = $l1->next;
            }
            $cur = $cur->next;
        }
        if ($l1 == null)
            $cur->next = $l2;
        else
            $cur->next = $l1;
        return $head->next;
    }
}


$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(4);
$node1->next = $node2;
$node2->next = $node3;
$node5 = new ListNode(1);
$node6 = new ListNode(3);
$node7 = new ListNode(4);
$node5->next = $node6;
$node6->next = $node7;

$clazz = new Q21();
$result = $clazz->mergeTwoLists($node1, $node5);
var_dump($result);