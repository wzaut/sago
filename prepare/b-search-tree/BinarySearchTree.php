<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/12
 * Time: 下午10:04
 */
require_once "../b-tree/TreeNode.php";

class BinarySearchTree
{
    //插入树节点到排序树的方法
    function insert(TreeNode $root, TreeNode $node)
    {
        $current = $root;
        while ($current != null) {
            if ($node->value > $current->value) {
                if ($current->right == null) {
                    $current->right = $node;
                    break;
                } else {
                    $current = $current->right;
                }
            } else {
                if ($current->left == null) {
                    $current->left = $node;
                    break;
                } else {
                    $current = $current->left;
                }
            }
        }
    }

}