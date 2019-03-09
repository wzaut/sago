<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/9
 * Time: 下午6:17
 */
class User
{
    public $id;

    public $name;

    public $parentId;

    public $children;

    function __construct($id, $name, $parentId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->children = array();
    }

}