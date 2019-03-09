<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/9
 * Time: 下午2:44
 */
require_once "TreeNode.php";


class BinaryTree
{
    function reverse(TreeNode $node)
    {
        $tmp = $node->left;
        $node->left = $node->right;
        $node->right = $tmp;
        if ($node->left != null)
            $this->reverse($node->left);
        if ($node->right != null)
            $this->reverse($node->right);
    }

    function preOrderPrint(TreeNode $node)
    {
        echo $node->value . " ";
        if ($node->left != null)
            $this->preOrderPrint($node->left);
        if ($node->right != null)
            $this->preOrderPrint($node->right);
    }

}