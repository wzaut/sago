<?php

namespace Sago\Prepare\Lru;

class Node
{
    public $key;

    public $value;

    public $pre;

    public $next;

    function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

}