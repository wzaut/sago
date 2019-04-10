<?php

require_once "TreeNode.php";
require_once "LvlTraverse.php";

$root = new TreeNode(101);
$node1 = new TreeNode(1);
$node2 = new TreeNode(2);
$node3 = new TreeNode(3);
$node4 = new TreeNode(4);
$node5 = new TreeNode(5);
$node6 = new TreeNode(6);

$root->left = $node1;
$root->right = $node2;
$node1->left = $node3;
$node1->right = $node4;
$node2->right = $node5;
$node5->right = $node6;

$class = new LvlTraverse();
$class->lvlTraverseWithRowNum($root);
