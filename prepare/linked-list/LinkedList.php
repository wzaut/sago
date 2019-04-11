<?php

require_once "../linkedlist-add/Node.php";

class LinkedList
{
    //单链表,奇数升,偶数降,现要求全局升
    function solution($node) //思路分成三个步骤
    {
        $node1 = $node;
        $node2 = $node->next;
        while ($node != null) { //1:将链表按照奇偶下标拆分成两个链表
            $tmp = $node->next;
            $node->next = isset($node->next->next) ? $node->next->next : null;
            $node = $tmp;
        }
        $node1 = $this->reverse($node1); //将降序链表反转
        $head = new Node(null);//哨兵节点
        $cur_node = $head;
        while ($node1 != null && $node2 != null) { //将两个升序链表合并
            if ($node1->value > $node2->value) {
                $cur_node->next = $node2;
                $node2 = $node2->next;
            } else {
                $cur_node->next = $node1;
                $node1 = $node1->next;
            }
            $cur_node = $cur_node->next;

        }
        if ($node1 == null)
            $cur_node->next = $node2;
        else
            $cur_node->next = $node1;

        return $head;
    }

    function reverse($node)
    {
        $pre = null;
        $cur = $node;
        while ($cur != null) {
            $next = $cur->next;
            $cur->next = $pre;
            $pre = $cur;
            $cur = $next;
        }
        return $pre;
    }

    function printList($node)
    {
        echo $node->value;
        while ($node->next != null) {
            $node = $node->next;
            echo " -> " . $node->value;
        }
        echo " -> null\n";
    }

}