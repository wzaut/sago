<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/9
 * Time: 下午2:51
 */

require_once "BinaryTree.php";
require_once "TreeNode.php";

$root = new TreeNode(1);
$node1 = new TreeNode(2);
$node2 = new TreeNode(3);
$node3 = new TreeNode(4);
$node4 = new TreeNode(5);
$node5 = new TreeNode(6);

$root->left = $node1;
$root->right = $node2;
$node1->left = $node3;
$node1->right = $node4;
$node2->right = $node5;

$btree = new BinaryTree();
$btree->preOrderPrint($root);
echo "\nafter reverse:\n";
$btree->reverse($root);
$btree->preOrderPrint($root);
