<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/8
 * Time: 下午1:43
 */

namespace Sago\Taop;
require_once "LCA.php";

$lca = new LCA();
$binary_tree = [null, 3, 5, 1, 6, 2, 0, 8, null, null, 7, 4];
$res = $lca->lowestCommonAncestor($binary_tree, 5, 4);
echo $res;