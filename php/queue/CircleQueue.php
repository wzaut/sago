<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/15
 * Time: 下午3:47
 */

namespace Sago\Php;


class CircleQueue
{
    /*
     * 大小
     */
    private $capacity;

    /*
     * 个数
     */
    private $count;

    /*
     * 头节点
     */
    private $head;

    /*
     * 尾节点
     */
    private $tail;


    function __construct($capacity)
    {
        $this->capacity = $capacity;

        $this->count = 0;

        $this->head = new LinkedListNode(null);

        $this->start = null;

        $this->tail = null;

        //初始化一个大小为capacity的空环形链表
        $node = $this->head;

        for ($i = 0; $i < $capacity - 1; ++$i) {
            $node->next = new LinkedListNode(null);
            $node = $node->next;
        }

        $node->next = $this->head;

    }

    /**
     * @param $data
     * @return int
     *
     * 入队
     */
    public function enqueue($data)
    {
        if ($this->count >= $this->capacity) {
            return StatusCode::QUEUE_FULL_CAPACITY;
        }

        if (empty($this->tail)) {
            $this->head->data = $data;
            $this->start = $this->head;
            $this->tail = $this->head;
        } else {
            $this->tail->next->data = $data;
            $this->tail = $this->tail->next;
        }
        $this->count++;

        return StatusCode::SUCCESS;
    }

    /**
     * @return int
     *
     * 出队
     */
    public function dequeue()
    {
        if ($this->count < 1) {
            return StatusCode::QUEUE_EMPTY;
        }
        $this->start->data = null;

        $this->start = $this->start->next;

        $this->count--;

        return StatusCode::SUCCESS;
    }

    /*
     * 打印
     */
    public function printCircleQueue()
    {
        $cur_node = $this->head;
        for ($i = 0; $i < $this->capacity; ++$i) {
            echo isset($cur_node->data) ? $cur_node->data . " -> " : "null" . " -> ";
            $cur_node = $cur_node->next;
        }
        echo "back head" . "\r\n";

    }

}