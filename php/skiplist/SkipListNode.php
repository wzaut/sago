<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/1/9
 * Time: 上午10:53
 */

namespace Sago\Php;


class SkipListNode
{
    public $data;

    public $forwards;

    public $max_level;

    function __construct()
    {
        $this->data = -1;
        $this->forwards = array();
        $this->max_level = 0;
    }
}