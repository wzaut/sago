<?php

require_once "../Util/Stack.php";

class PathSum
{
    /*
     * Given a binary tree and a sum, find all root-to-leaf paths where each path's sum equals the given sum.

        Note: A leaf is a node with no children.

        Example:

        Given the below binary tree and sum = 22,

              5
             / \
            4   8
           /   / \
          11  13  4
         /  \    / \
        7    2  5   1
        Return:

        [
           [5,4,11,2],
           [5,8,4,5]
        ]
     */
    public $resList = [];

    public function sumPath($node, $sum)
    {
        if ($node == null)
            return $this->resList;
        $stack = new Stack();
        $this->sumNodeToPath($node, $sum, $stack);
        return $this->resList;
    }

    private function sumNodeToPath($node, $sum, $stack)
    {
        $stack->push($node->value);
        if ($node->value == $sum && $node->left == null && $node->right == null)
            $this->resList[] = $stack->items;
        if ($node->left != null)
            $this->sumNodeToPath($node->left, $sum - $node->value, $stack);
        if ($node->right != null)
            $this->sumNodeToPath($node->right, $sum - $node->value, $stack);
        $stack->pop();
    }

}