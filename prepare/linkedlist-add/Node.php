<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/3
 * Time: 下午8:05
 */
class Node
{
    public $value;
    public $next;

    function __construct($value = null)
    {
        $this->value = $value;
        $this->next = null;
    }

}