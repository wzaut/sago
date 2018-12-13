<?php

namespace Sago\Php;

/**
 *链表相关算法
 *
 * isPalindrome 判断链表存储的字符串是否是回文
 *
 * reverse 反转链表
 *
 * checkCircle 检测链表中是否有环
 *
 * mergeSortedList 两个链表的有序合并
 *
 * deleteLastNth 删除链表倒数第n个节点
 *
 * findMidNode 求链表中间节点
 *
 *
 */
class LinkedListFunc
{

    public $list;


    function __construct(LinkedList $list = null)
    {
        $this->list = $list;
    }

    public function setList(LinkedList $list)
    {
        $this->list = $list;
    }

    /*
     * 判断链表是否为回文
     *
     */
    public function isPalindrome()
    {
        $list = $this->list;
        $length = $list->getLength();
        if ($length < 0) {
            return false;
        }
        if ($length == 1) {
            return true;
        }

        if ($length % 2 == 0) {
            //长度是偶数情况
            $mid = $length / 2;
            $pre_node = $list->head;
            for ($i = 0; $i < $mid; ++$i) {
                $pre_node = $pre_node->next;
            }
            $suf_node = $pre_node->next;

        } else {
            //长度是奇数情况
            $mid = ($length - 1) / 2;
            $pre_node = $list->head;
            for ($i = 0; $i < $mid; ++$i) {
                $pre_node = $pre_node->next;
            }
            $suf_node = $pre_node->next->next;
        }

        //依次判断回文
        for ($i = 0; $i < $mid; ++$i) {
            if ($pre_node->data != $suf_node->data) {
                return false;
            }
            $pre_node = $list->getPreNode($pre_node);
            $suf_node = $suf_node->next;

        }


        return true;

    }

    /*
     * 反转链表
     *
     */
    public function reverse()
    {
        if ($this->list->length <= 1) {
            return StatusCode::LINKED_LIST_LESS_THAN_TWO_NODES;
        }
        $new_head_node = null;
        for ($j = $this->list->length; $j > 0; --$j) {
            $tail_node = $this->list->head;

            for ($i = 0; $i < $j; ++$i) {
                $tail_node = $tail_node->next;
            }

            if ($j == $this->list->length) {
                $new_head_node = $tail_node;
            }
            $pre_node = $this->list->getPreNode($tail_node);
            $tail_node->next = empty($pre_node->data) ? null : $pre_node;
        }

        $this->list->head->next = $new_head_node;

    }

    /*
     * 检查链表是否有环
     */
    public function checkCircle()
    {
        $list = $this->list;
        $length = $list->getLength();
        if ($length < 2) {
            return StatusCode::LINKED_LIST_LESS_THAN_TWO_NODES;
        }
        //定义两个快慢指针
        $fast = $list->head->next;
        $slow = $list->head->next;

        while ($fast != null && $slow != null) {
            //isset防止无环时NOTICE异常
            $fast = isset($fast->next->next) ? $fast->next->next : null;
            $slow = $slow->next;

            //慢指针和快指针相遇说明有环 证明文档@link http://t.cn/ROxpgQ1
            if ($fast === $slow) {
                return true;
            }
        }

        return false;

    }

    /*
     * 两个链表的有序合并
     *
     */
    public function mergeSortedList(LinkedList $list1, LinkedList $list2)
    {
        if ($list1 == null || $list2 == null) {
            return StatusCode::PARAM_ERROR;
        }

        $sort_list = new LinkedList();
        $sort_node = $sort_list->head;
        $node1 = $list1->head->next;
        $node2 = $list2->head->next;

        //从小到大排列,如果相等把node1放在前面
        while ($node1 != null && $node2 != null) {
            if ($node1->data <= $node2->data) {
                $sort_node->next = $node1;
                $node1 = $node1->next;
            } else {
                $sort_node->next = $node2;
                $node2 = $node2->next;
            }

            $sort_node = $sort_node->next;

        }
        if ($node1 != null) {
            $sort_node->next = $node1;
        }
        if ($node2 != null) {
            $sort_node->next = $node2;
        }
        $sort_list->length = $list1->length + $list2->length;

        return $sort_list;

    }

}