<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/13
 * Time: 下午9:16
 */
class FLD
{
    public $longest = 0;
    //find longest distance of an binary-tree
    function findLongestDistance($root)
    {
        $distance = $this->getHeight($root->left) + $this->getHeight($root->right) + 1;
        if ($distance > $this->longest)
            $this->longest = $distance;
        if ($root->left != null)
            $this->findLongestDistance($root->left);
        if ($root->right != null)
            $this->findLongestDistance($root->right);
    }

    function getHeight($node)
    {
        if ($node == null)
            return 0;
        return max($this->getHeight($node->left), $this->getHeight($node->right)) + 1;
    }
}