<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/2/1
 * Time: 上午10:10
 */

/*
 * 旋转字符串
 *
 * 给定一个字符串'abcdef'
 * 要求将前面两个字符'a'和'b'移动到字符串尾部
 *
 * 时间复杂度满足O(n)
 * 空间复杂度满足O(1)
 */

namespace Sago\Taop;

class C101
{
    public function reverseSeq(&$str, $forward, $tail)
    {
        while ($tail > $forward) {
            $tmp = $str[$forward];
            $str[$forward] = $str[$tail];
            $str[$tail] = $tmp;
            $tail--;
            $forward++;
        }

    }
}
