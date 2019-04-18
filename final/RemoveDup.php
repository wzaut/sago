<?php

//去掉aabb中的一个b,去掉aaa中的一个a
class RemoveDup
{
    function rmvDupChar($str)
    {
        $res = '';
        $tmp = '';
        $len = strlen($str);
        $i = 0;
        while ($i < $len) { //先处理大于等于3个字符串连续的,将其缩小为两个字符串连续 如aaaa需变成aa
            if ($i + 2 < $len && $str[$i] == $str[$i + 1]) { //存在两个连续相同
                $tmp .= $str[$i] . $str[$i + 1]; //先存储这两个字符
                $j = $i + 2;
                while ($j < $len && $str[$i] == $str[$j]) //累计之后相同的字符
                    $j++;
                $i = $j;//跳过两个以上相同字符
            } else {
                $tmp .= $str[$i];
                $i++;
            }
        }
        $i = 0;
        $len = strlen($tmp);
        while ($i < $len) { //再处理aabb的情况,变为aab
            if ($i + 3 < $len && $tmp[$i] == $tmp[$i + 1] && $tmp[$i + 2] == $tmp[$i + 3]) { //存在aabb保存aab跳过最后一个b
                $res .= $tmp[$i] . $tmp[$i + 1] . $tmp[$i + 2];
                $i += 4;
            } else {
                $res .= $tmp[$i];
                $i++;
            }
        }
        return $res;
    }
}

$str = "abcdddbbbaabcdddddaa";
$clazz = new RemoveDup();
echo $clazz->rmvDupChar($str);