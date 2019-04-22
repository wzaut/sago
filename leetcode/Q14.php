<?php


class Q14
{
    function longestCommonPrefix($strs)
    {
        if (count($strs) == 0)
            return "";
        $prefix = $strs[0];
        for ($i = 1; $i < count($strs); ++$i) {
            $len1 = strlen($prefix);
            if ($len1 == 0) return "";
            $len2 = strlen($strs[$i]);
            if ($len2 == 0) return "";
            $len_min = $len1 > $len2 ? $len2 : $len1;

            $tmp = "";
            for ($j = 0; $j < $len_min; ++$j) {
                if ($prefix[$j] == $strs[$i][$j])
                    $tmp .= $prefix[$j];
                else
                    break;
            }
            $prefix = $tmp;
        }

        return $prefix;
    }
}

$strs = ["dog","racecar","car"];
$clazz = new Q14();
$result = $clazz->longestCommonPrefix($strs);
echo $result;