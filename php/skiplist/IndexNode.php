<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/7
 * Time: 下午11:02
 */

namespace Sago\Php;


class IndexNode
{
    public $data;

    public $next;

    public $down;

    function __construct($data, $next, $down)
    {
        $this->data = $data;
        $this->next = $next;
        $this->down = $down;

    }


}