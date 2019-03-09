<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/9
 * Time: 下午6:45
 */

require_once "User.php";
require_once "UserTree.php";

$user1 = new User(1, 'a', null);
$user2 = new User(2, 'b', 1);
$user3 = new User(3, 'c', 1);
$user4 = new User(4, 'd', 2);
$user5 = new User(5, 'e', 2);

$user_tree = new UserTree();
$user_tree->addUser($user1);
$user_tree->addUser($user2);
$user_tree->addUser($user3);
$user_tree->addUser($user4);
$user_tree->addUser($user5);

$user_tree->addChildren();

//echo print_r($user_tree->user_list, true);
$user_tree->getChildren($user1);