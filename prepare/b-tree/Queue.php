<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/12
 * Time: 下午7:43
 */
class Queue
{
    public $items;

    public $count;

    function __construct()
    {
        $this->items = array();
        $this->count = 0;
    }

    function enQueue($item)
    {
        $this->items[] = $item;
        $this->count += 1;
        error_log(print_r($this->items, true));
    }

    function deQueue()
    {
        $res = array_shift($this->items);
        $this->count -= 1;
        return $res;
    }

}