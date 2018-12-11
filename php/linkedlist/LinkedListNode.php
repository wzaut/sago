<?php

namespace Sago\Php;


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