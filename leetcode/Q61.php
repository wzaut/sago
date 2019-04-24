<?php

/*
Given a linked list, rotate the list to the right by k places, where k is non-negative.

Example 1:

Input: 1->2->3->4->5->NULL, k = 2
Output: 4->5->1->2->3->NULL
Explanation:
rotate 1 steps to the right: 5->1->2->3->4->NULL
rotate 2 steps to the right: 4->5->1->2->3->NULL
 */
require_once "ListNode.php";

class Q61
{
    function rotateRight($head, $k)
    {
        $count = 1;
        $tail = $head;
        while ($tail->next != null) {
            $tail = $tail->next;
            $count++;
        }
        $tail->next = $head;
        //向后移动比较困难,所以向前移动|k-count|的距离
        //k%count去掉不必要的整圈移动,余数为向前的移动距离,所以向后的距离为count-k%count
        for ($i = 1; $i <= $count - $k % $count; ++$i) {
            $tail = $tail->next;
        }
        $head = $tail->next; //tail的next为head
        $tail->next = null;

        return $head;
    }

}
$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node5 = new ListNode(5);
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node5;

$class = new Q61();
$head = $class->rotateRight($node1, 11);
printList($head);

function printList($head) {
    while ($head != null) {
        echo $head->val . " -> ";
        $head = $head->next;
    }
    echo "null";
}