<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/14
 * Time: 上午10:23
 */
class Stack
{
    public $items;

    public $count;

    function __construct()
    {
        $this->items = array();
        $this->count = 0;
    }

    function push($item)
    {
        $this->items[] = $item;
        $this->count++;
    }

    function pop()
    {
        $res = array_pop($this->items);
        $this->count--;
        return $res;
    }

    function getTop()
    {
        return $this->items[$this->count - 1];
    }

}