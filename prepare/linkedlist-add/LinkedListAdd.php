<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/3
 * Time: 下午8:05
 */
class LinkedListAdd
{
    //增加哨兵节点
    function addHead(Node $node)
    {
        $head = new Node();
        $head->next = $node;
        return $head;
    }

    //链表反转
    function reverse(Node $head)
    {
        $prev = null;
        $cur = $head->next;
        $next = isset($cur->next) ? $cur->next : null;
        while ($cur != null) {
            $cur->next = $prev;
            $prev = $cur;
            $cur = $next;
            $next = isset($cur->next) ? $cur->next : null;
        }
        $head->next = $prev;
    }

    //两个链表相加
    function add(Node $head1, Node $head2)
    {
        $node1 = $head1->next;
        $node2 = $head2->next;
        $head = new Node();
        $node = new Node();
        $head->next = $node;
        while ($node1 != null || $node2 != null) {
            $value1 = isset($node1->value) ? $node1->value : 0;
            $value2 = isset($node2->value) ? $node2->value : 0;
            $value = isset($node->value) ? $node->value : 0;
            $sum = $value1 + $value2 + $value;

            if ($sum >= 10) {
                $node->value = $sum - 10;
                $node->next = new Node();
                $node->next->value = 1;
            } else {
                if (isset($node1->next) || isset($node2->next)) {
                    $node->next = new Node();
                }
                $node->value = $sum;
            }
            $node1 = isset($node1->next) ? $node1->next : null;
            $node2 = isset($node1->next) ? $node1->next : null;
            $node = $node->next;
        }

        return $head;
    }

    //打印
    function print_list(Node $head)
    {
        echo "head->";
        $node = $head->next;
        while ($node != null) {
            echo $node->value . "->";
            $node = $node->next;
        }
        echo "null" . PHP_EOL;
    }

}