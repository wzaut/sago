<?php

/**
 * 求找钱最少给几个硬币
 *
 * 有1024元钱 输入你花掉的数目问找回的硬币数最小
 *
 * 有64 16 4 1 的硬币
 * 分别2的6次方,2的4次方,2的2次方
 */
class ChangeCoin
{
    function minCount($pay_money)
    {
        $change_count = 0;
        $change_money = 1024 - $pay_money;
        if ($change_money >= 64) {
            $change_count += $change_money >> 6;
            $change_money &= 64 - 1;
        }
        if ($change_money >= 16) {
            $change_count += $change_money >> 4;
            $change_money &= 16 - 1;
        }
        if ($change_money >= 4) {
            $change_count += $change_money >> 2;
            $change_money &= 4 - 1;
        }
        return $change_count + $change_money;
    }

}

$clazz = new ChangeCoin();
echo $clazz->minCount(234);