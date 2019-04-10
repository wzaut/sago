<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/10
 * Time: 下午6:08
 */
require_once "../Util/Queue.php";

class LvlTraverse
{
    function lvlTraverseWithRowNum($node)
    {
        $queue1 = new Queue();
        $queue2 = new Queue();
        $queue1->enQueue($node);
        $level = 1;
        while ($queue1->count != 0 || $queue2->count != 0) {
            if ($level & 1 == 1) {
                $node = $queue1->deQueue();
                echo $node->value . " ";
                if ($node->left != null)
                    $queue2->enQueue($node->left);
                if ($node->right != null)
                    $queue2->enQueue($node->right);
                if ($queue1->count == 0) {
                    echo "level: " . $level . "\n";
                    $level++;
                }
            } else {
                $node = $queue2->deQueue();
                echo $node->value . " ";
                if ($node->left != null)
                    $queue1->enQueue($node->left);
                if ($node->right != null)
                    $queue1->enQueue($node->right);
                if ($queue2->count == 0) {
                    echo "level: " . $level . "\n";
                    $level++;
                }
            }
        }
    }

}