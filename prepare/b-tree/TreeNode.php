<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/9
 * Time: 下午2:45
 */
class TreeNode
{
    public $value;

    public $left;

    public $right;

    function __construct($value)
    {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }

}