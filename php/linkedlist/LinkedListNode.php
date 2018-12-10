<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 18/12/10
 * Time: 上午11:01
 */
class LinkedListNode
{
    public $data;

    public $next;


    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

}