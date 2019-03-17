<?php

require_once "../Util/Stack.php";

class LCA
{
    public $u = [];

    function dfs($node)
    {
        $stack = new Stack();
        $stack->push($node);
        $i = 0;
        $tmp = [];
        while ($stack->count != null) {
            $node = $stack->pop();
            $this->u[$i][] = $node->value;
            if ($node->right != null && $node->left != null)
                $tmp[] = $node;
            if ($node->right == null && $node->left == null)
                $i++;
            if ($node->right != null)
                $stack->push($node->right);
            if ($node->left != null)
                $stack->push($node->left);
        }
        for ($i = 0; $i < count($tmp); ++$i) {
            array_unshift($this->u[$i + 1], $tmp[$i]->value);
        }


    }

}