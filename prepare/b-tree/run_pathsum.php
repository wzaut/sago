<?php

require_once "PathSum.php";
require_once "TreeNode.php";

$class = new PathSum();

$root = new TreeNode(1);
$node1 = new TreeNode(2);
$node2 = new TreeNode(3);
$node3 = new TreeNode(4);
$node4 = new TreeNode(5);
$node5 = new TreeNode(3);

$root->left = $node1;
$root->right = $node2;
$node1->left = $node3;
$node1->right = $node4;
$node2->right = $node5;

$res_list = $class->sumPath($root, 7);

echo print_r($res_list, true);
