<?php

namespace Sago\Php;

/*
 * 用链表实现的链式栈
 */

class Stack
{
    /*
     * 栈的容量
     */
    private $capacity;

    /*
     * 栈节点数量
     */
    private $count;

    /*
     * 栈头哨兵节点
     */
    private $head;


    function __construct($capacity)
    {
        $this->capacity = $capacity;
        $this->count = 0;
        $this->head = new LinkedListNode(null);
    }


    public function getCount()
    {
        return $this->count;
    }

    /*
     * 入栈操作
     */
    public function push(LinkedListNode $node)
    {
        $count = $this->count;
        if ($count >= $this->capacity) {
            return StatusCode::STACK_FULL_CAPACITY;
        }
        $tail_node = $this->head;
        for ($i = 0; $i < $count; ++$i) {
            $tail_node = $tail_node->next;
        }

        $tail_node->next = $node;

        $this->count++;

        return StatusCode::SUCCESS;

    }

    /*
     * 出栈操作
     */
    public function pop()
    {
        $count = $this->count;
        if ($count <= 0) {
            return StatusCode::STACK_EMPTY;
        }
        $tail_node = $this->head;
        for ($i = 0; $i < $count - 1; ++$i) {
            $tail_node = $tail_node->next;
        }
        $tail_node->next = null;

        $this->count--;

        return StatusCode::SUCCESS;

    }

    public function printStack()
    {
        echo 'head -> ';
        $cur_node = $this->head;
        while ($cur_node->next != null) {
            echo $cur_node->next->data . ' -> ';
            $cur_node = $cur_node->next;
        }
        echo 'null' . "\r\n";

    }


}