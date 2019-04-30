<?php

require_once "ListNode.php";
class Q148
{

    function sortList($head)
    {
        if ($head == null || $head->next == null)
            return $head;


        $pre = null;
        $slow = $fast = $head;
        while ($fast != null && $fast->next != null) {
            $pre = $slow;
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        $pre->next = null;

        $l1 = $this->sortList($head);
        $l2 = $this->sortList($slow);

        return $this->merge($l1, $l2);
    }
    function merge ($l1, $l2) {
        $l = new ListNode(null);
        $c = $l;
        while ($l1 != null && $l2 != null) {
            if ($l1->val > $l2->val) {
                $c->next = $l2;

                $l2 = $l2->next;
            } else {
                $c->next = $l1;

                $l1 = $l1->next;
            }
            $c = $c->next;

        }
        if ($l1 != null)
            $c->next = $l1;
        else
            $c->next = $l2;
        return $l->next;
    }



}
$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node5 = new ListNode(5);
$node1->next = $node4;
$node4->next = $node5;

$node5->next = $node3;
$node3->next = $node2;
$clazz = new Q148();
printList($clazz->sortList($node1));

function printList($head) {
    $n = $head;
    while ($n != null) {
        echo $n->val . "->";
        $n = $n->next;
    }
    echo "null\n";
}