<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/16
 * Time: 下午9:06
 */

namespace Sago\Php;


class ArrayQueue
{
    private $capacity;

    private $count;

    private $items;


    function __construct($capacity)
    {
        $this->capacity = $capacity;
        $this->count = 0;
        $this->items = array();
    }

    public function enqueue($data)
    {
        if($this->count >= $this->capacity) {
            return StatusCode::QUEUE_FULL_CAPACITY;
        }

        $this->items[] = $data;

        $this->count++;

        return StatusCode::SUCCESS;
    }

    public function dequeue()
    {
        if($this->count <= 0) {
            return StatusCode::QUEUE_EMPTY;
        }

        array_shift($this->items);

        $this->count--;

        return StatusCode::SUCCESS;
    }

    public function printArrQueue()
    {
        echo print_r($this->items, true);
    }

}