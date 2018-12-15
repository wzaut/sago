<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/15
 * Time: 上午11:42
 */

namespace Sago\Php;


class Queue
{
    /*
     * 队列容积
     */
    private $capacity;

    /*
     * 队列元素个数
     */
    private $count;

    /*
     * 哨兵节点
     */
    private $head;


    function __construct($capacity)
    {
        $this->capacity = $capacity;
        $this->count = 0;
        $this->head = new LinkedListNode(null);
    }

    /*
     * 入队
     */
    public function enqueue(LinkedListNode $node)
    {
        if($this->count >= $this->capacity) {
            return StatusCode::QUEUE_FULL_CAPACITY;
        }
        $tail_node = $this->head;
        for ($i = 0; $i < $this->count; ++$i) {
            $tail_node = $tail_node->next;
        }

        $tail_node->next = $node;

        $this->count++;

        return StatusCode::SUCCESS;

    }


    /*
     * 出队
     */
    public function dequeue()
    {
        if($this->count <= 0) {
            return StatusCode::QUEUE_EMPTY;
        }
        $this->head->next = $this->head->next->next;

        $this->count--;

        return StatusCode::SUCCESS;

    }

    /*
     * 打印
     */
    public function printQueue()
    {
        echo "head -> ";
        $cur_node = $this->head;
        while ($cur_node->next != null) {
            echo $cur_node->next->data . " -> ";
            $cur_node =$cur_node->next;
        }
        echo "null \r\n";
    }

}