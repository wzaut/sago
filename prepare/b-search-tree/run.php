<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/12
 * Time: 下午10:25
 */

require_once "../b-tree/TreeNode.php";
require_once "BinarySearchTree.php";
require_once "../b-tree/BinaryTree.php";

$root = new TreeNode(10);
$node1 = new TreeNode(9);
$node2 = new TreeNode(14);
$node3 = new TreeNode(8);
$node4 = new TreeNode(13);
$node5 = new TreeNode(16);
$node6 = new TreeNode(11);

$root->left = $node1;
$root->right = $node2;
$node1->left = $node3;
$node2->left = $node4;
$node2->right = $node5;
$node4->left = $node6;

$node7 = new TreeNode(12);
$bst = new BinarySearchTree();
$bst->insert($root, $node7);

$bt = new BinaryTree();
$bt->preOrderPrint($root);