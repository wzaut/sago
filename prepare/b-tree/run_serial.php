<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/16
 * Time: 下午4:46
 */
require_once "Serialization.php";
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

$class = new Serialization();
$class->serial($node1);
echo $class->string;

$res = $class->deSerial();
echo print_r($res, true);

