<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/8
 * Time: 下午1:25
 */

namespace Sago\Taop;
class LCA
{
    /*
     * 二叉树的最短公共祖先问题
     * Input: root = [3,5,1,6,2,0,8,null,null,7,4], p = 5, q = 1
     * Output: 3
     * Explanation: The LCA of nodes 5 and 1 is 3.
     */
    function lowestCommonAncestor($binary_tree, $p, $q)
    {
        $index_p = $index_q = 0;
        foreach ($binary_tree as $index => $value) {
            if ($value == $p) {
                $index_p = $index;
                break;
            }
        }

        foreach ($binary_tree as $index => $value) {
            if ($value == $q) {
                $index_q = $index;
                break;
            }
        }
        $root_p = [];
        while ($index_p >= 1) {
            $root_p[] = $binary_tree[$index_p];
            $index_p >>= 1;
        }
        $root_q = [];
        while ($index_q >= 1) {
            $root_q[] = $binary_tree[$index_q];
            $index_q >>= 1;
        }
        foreach ($root_p as $value) {
            if (in_array($value, $root_q)) {
                return $value;
            }
        }
    }
}