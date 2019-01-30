<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/1/30
 * Time: 下午2:07
 */

namespace Sago\taop;


class C205
{
    /*
     * 跳台阶问题
     */

    /*
     *
     * 一个台阶总共有n级,如果一次可以跳1级,也可以跳2级
     *
     * 求总共有多少种跳法
     *
     * 并分析算法的复杂度
     */
    function Fibonacci($n)
    {
        //剩余0级有0种,剩余1级有1种,剩余2级有2种(1,1; 2)
        $result = [0 => 0, 1 => 1, 2 => 2];

        if ($n <= 2) {
            return $result[$n];
        }

        return $this->Fibonacci($n - 1) + $this->Fibonacci($n - 2);
    }
    /*
     ***通过递归树分析斐波那契数列的复杂度**
     *
     * 如   f(4)
     *    /    \
     *   f(3) f(2)
     *   /  |
     * f(2) f(1)
     * (递归树)
     *
     * 父节点等于其左右子节点相加,其复杂度为1
     *   所以复杂度为节点的个数
     * 为: 2^0 + 2^1 + 2^2 + ... + 2^(k-1) = 2^k-1
     *
     * 其中k为高度
     *
     *
     * 最长边每次走1步 为 n
     * 最短边为每次走2步 为 n/2
     *
     * 所以复杂度介于O(2^n)和O(2^(n/2))之间
     */


    /*
     * 解法二:
     * 解法一用的递归的方法有许多重复计算的工作，事实上，我们可以从后往前推，一步步利用之前计算的结果递推。
     *
     * 同样利用递推公式:
     * f(n)=f(n-1)+f(n-2)
     * 令f(1)=1 f(2)=2
     * f(3)=f(2)+f(1)=3
     * f(4)=f(3)+f(2)=5
     * ...
     * 0,1,2,3,5,8,13,21...
     */
    function climbStairs2($n)
    {
        $step = [0, 1, 2];
        for ($i = 3; $i <= $n; ++$i) {
            $step[$i] = $step[$i - 1] + $step[$i - 2];
        }
        return $step[$n];
    }

    //全排列问题-参见<数据结构于算法之美>27章
    private $res = [];

    /*
     * 参数: $k 表示要处理子数组的数据个数
     */
    function fullPermutations($arr, $k)
    {
        if ($k == 1) {
            $this->res[] = $arr;
        }
        for ($i = 0; $i < $k; ++$i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$k - 1];
            $arr[$k - 1] = $tmp;
            $this->fullPermutations($arr, $k - 1);
            $tmp = $arr[$i];
            $arr[$i] = $arr[$k - 1];
            $arr[$k - 1] = $tmp;
        }

        return $this->res;
    }
    //复杂度分析: 大于O(n!) 小于O(n*n!)
    /*
     * 第一层:1个f(n) 为 n
     * 第二层:n个f(n-1) 为 n(n-1)
     * 第三层:n(n-1)个f(n-2) 为 n(n-1)(n-2)
     * ...
     */

    //兑换硬币问题
    /*
     * 用枚举法来解决
     */
    function exchangeMoney($n)
    {
        $count = 0;
        $one = 1;
        $two = 2;
        $five = 5;
        $ten = 10;
        for ($i = 0; $i <= ceil($n / $one); ++$i) {
            for ($j = 0; $j <= ceil($n / $two); ++$j) {
                for ($k = 0; $k <= ceil($n / $five); ++$k) {
                    for ($l = 0; $l <= ceil($n / $ten); ++$l) {
                        if ($i * $one + $j * $two + $k * $five + $l * $ten == $n) {
                            $count++;
                        }
                    }
                }
            }
        }

        return $count;
    }

    /*
     * 解法二
     */
    function changeCoin($n)
    {
        $money = [1, 2, 5, 10];
        $arr = [1];

        for ($i = 0; $i < count($money); ++$i) {
            for ($j = $money[$i]; $j <= $n; ++$j) {
                $arr[$j] += $arr[$j - $money[$i]];
            }
        }

        return $arr;
    }

}