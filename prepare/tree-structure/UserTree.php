<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/9
 * Time: 下午6:20
 */
class UserTree
{
    public $user_list;

    function __construct()
    {
        $this->user_list = array();
    }

    function addUser(User $user)
    {
        $this->user_list[$user->id] = $user;
    }

    function addChildren()
    {
        foreach ($this->user_list as $id => $user) {
            $parentId = $user->parentId;
            if (!empty($parentId) && isset($this->user_list[$parentId])) {
                $this->user_list[$parentId]->children[] = $user;
            }
        }
    }

    function getChildren(User $user)
    {
        $user_id = $user->id;
        if (!isset($this->user_list[$user_id])) {
            return -1;
        }
        if (!empty($this->user_list[$user_id]->children)) {
            foreach ($this->user_list[$user_id]->children as $child) {
                echo $child->id . " ";
                $this->getChildren($child);
            }
        }
    }
}