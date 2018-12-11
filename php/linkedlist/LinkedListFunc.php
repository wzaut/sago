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
 * mergeSortedList 两个有序列表的合并
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


}