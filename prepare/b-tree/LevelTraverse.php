<?php

require_once "Queue.php";

class LevelTraverse
{
    //层级遍历
    function traverseInLevel(TreeNode $root)
    {
        $queue = new Queue();
        $queue->enQueue($root);
        while ($queue->count != 0) {
            $first = $queue->deQueue();
            echo $first->value . " ";
            if ($first->left != null)
                $queue->enQueue($first->left);
            if ($first->right != null)
                $queue->enQueue($first->right);
        }
    }

    //层级遍历,每一层结束换行打印下一层
    function traverseInLevelEachRow(TreeNode $root)
    {
        $queue = new Queue();
        $queue->enQueue($root);
        $count = $queue->count;
        while ($count != 0) {
            for ($i = $count; $i > 0; --$i) {
                $first = $queue->deQueue();
                echo $first->value . " ";
                if ($first->left != null)
                    $queue->enQueue($first->left);
                if ($first->right != null)
                    $queue->enQueue($first->right);
            }
            echo PHP_EOL;
            $count = $queue->count;
        }
    }

}