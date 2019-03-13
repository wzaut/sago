<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/9
 * Time: 下午2:51
 */

require_once "BinaryTree.php";
require_once "TreeNode.php";
require_once "LevelTraverse.php";

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

//$btree = new BinaryTree();
//$btree->preOrderPrint($root);
//echo "\nafter reverse:\n";
//$btree->reverse($root);
//$btree->preOrderPrint($root);

echo "\nbinary-tree-level-traverse:\n";
$level_traverse = new LevelTraverse();
$level_traverse->traverseInLevel($root);

echo "\nbinary-tree-level-traverse-each-level-each-row:\n";
$level_traverse->traverseInLevelEachRow($root);
