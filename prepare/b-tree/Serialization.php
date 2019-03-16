<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/16
 * Time: 下午3:28
 */
require_once "TreeNode.php";

class Serialization
{
    public $string;

    public $i = -1;

    public function serial($root)
    {
        if ($root == null) {
            $this->string .= "#";
            return;
        }
        $this->string .= $root->value;
        $this->serial($root->left);
        $this->serial($root->right);
    }

    public function deSerial()
    {
        $this->i++;
        if ($this->i >= strlen($this->string)) {
            return null;
        }

        $node = null;
        if ($this->string[$this->i] != "#") {
            $node = new TreeNode($this->string[$this->i]);
            $node->left = $this->deSerial();
            $node->right = $this->deSerial();
        }

        return $node;
    }

}