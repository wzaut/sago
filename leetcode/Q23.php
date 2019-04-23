<?php

require_once "ListNode.php";

/**
 * Merge k sorted linked lists and return it as one sorted list. Analyze and describe its complexity.
 * Example:
 * Input:
 * [
 * 1->4->5,
 * 1->3->4,
 * 2->6
 * ]
 * Output: 1->1->2->3->4->4->5->6
 */
class POQ extends SplPriorityQueue
{
    public function compare($priority1, $priority2) //维护一个小顶堆
    {
        if ($priority1 == $priority2)
            return 0;
        return $priority1 > $priority2 ? -1 : 1;
    }
}

class Q23
{
    function mergeKLists($lists)
    {
        $poq = new POQ();
        foreach ($lists as $list) {
            if ($list != null)
                $poq->insert($list, $list->val);
        }
        $head = new ListNode(0);
        $cur = $head;
        while (!$poq->isEmpty()) {
            $top = $poq->top();
            $cur->next = $top;
            $poq->extract();
            if ($top->next != null)
                $poq->insert($top->next, $top->next->val);
            $cur = $cur->next;
        }
        return $head->next;
    }

}

$node1 = new ListNode(1);
$node2 = new ListNode(4);
$node3 = new ListNode(5);
$node1->next = $node2;
$node2->next = $node3;

$node5 = new ListNode(1);
$node6 = new ListNode(3);
$node7 = new ListNode(4);
$node5->next = $node6;
$node6->next = $node7;

$node8 = new ListNode(2);
$node9 = new ListNode(6);
$node8->next = $node9;

$clazz = new Q23();
$lists = [$node1, $node5, $node8];
$result = $clazz->mergeKLists($lists);
printList($result);

function printList($ListNode) {
    $cur = $ListNode;
    while ($cur != null) {
        echo $cur->val . " -> ";
        $cur = $cur->next;
    }
    echo "null";
}