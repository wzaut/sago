<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/18
 * Time: 下午11:09
 */
class Matrix
{
    public $max = 0;

    function getLongest($node, $len)
    {
        if ($len > $this->max)
            $this->max = $len;
        if ($node->right != null) {
            if ($node->right->value > $node->value)
                $this->getLongest($node->right, $len + 1);
            else
                $this->getLongest($node->right, 0);

        } else {
            return;
        }

        if ($node->down != null) {
            if ($node->down->value > $node->value)
                $this->getLongest($node->down, $len + 1);
            else
                $this->getLongest($node->down, 0);
        } else {
            return;
        }
    }

}