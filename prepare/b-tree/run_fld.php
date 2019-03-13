<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/13
 * Time: 下午9:30
 */
require_once "FLD.php";
require_once "TreeNode.php";

$root = new TreeNode(1);
$node1 = new TreeNode(2);
$node2 = new TreeNode(3);
$node3 = new TreeNode(4);
$node4 = new TreeNode(5);
$node5 = new TreeNode(6);
$node6 = new TreeNode(7);
$node7 = new TreeNode(8);
$node8 = new TreeNode(9);
$node9 = new TreeNode(10);
$node10 = new TreeNode(11);

$root->left = $node1;
$root->right = $node2;
$node1->left = $node3;
$node1->right = $node4;
$node2->right = $node5;
$node3->left = $node6;
$node4->right = $node7;
$node6->left = $node8;
$node7->right = $node9;
$node8->left = $node10;


$fld = new FLD();
$fld->findLongestDistance($root);

echo $fld->longest;