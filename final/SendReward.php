<?php

/*
 * n个人参加比赛，得到分数，所有人排成一圈，相邻两个人分数多的要比分数少的拿到的奖励多，分数相同则任意
 * 问最少应该准备多少奖品
 * 输入分数，参赛人个数
 * 输出最少应该准备多少奖品
 * 如，输入1，2，3，3
 * 需准备1，2，3，2个奖品
 * 返回8
 */

class SendReward
{
    function sendPointReward($arr, $n)
    {
        $i = 0;
        $count = 0;
        $count_arr = [];
        while ($i < $n) {
            if ($i == 0) { //第一个数
                $count_arr[0] = 1;
                $count = 1;
            } elseif ($arr[$i] == $arr[$i - 1]) { //相邻两个分数相等情况
                if ($i == $n - 1) { //最后一个元素，准备2份奖品
                    $count_arr[$i] = 2;
                    $count += 2;
                } else {
                    $count_arr[$i] = 1;
                    $count += $count_arr[$i];
                }
            } else {
                $count_arr[$i] = $count_arr[$i - 1] + 1;
                $count += $count_arr[$i];
            }
            $i++;
        }
        return $count;
    }
}

$arr = [1, 2, 3, 3, 3, 4, 4];
$class = new SendReward();
echo $class->sendPointReward($arr, count($arr));