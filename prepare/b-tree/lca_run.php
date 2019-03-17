<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/17
 * Time: 上午11:31
 */

require_once "LCA.php";
require_once "TreeNode.php";

$node1 = new TreeNode(1);
$node2 = new TreeNode(2);
$node3 = new TreeNode(3);
$node4 = new TreeNode(4);
$node5 = new TreeNode(5);
$node6 = new TreeNode(6);
$node7 = new TreeNode(7);
$node8 = new TreeNode(8);

$node1->left = $node2;
$node1->right = $node3;
$node2->left = $node4;
$node3->left = $node5;
$node3->right = $node6;
$node5->left = $node7;
$node7->left = $node8;

$lca =new LCA();
$lca->dfs($node1);
echo print_r($lca->u, true);