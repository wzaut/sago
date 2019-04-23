<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/4/23
 * Time: 下午2:48
 */
class Q5
{
    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        if (strlen($s) == 0) return 0;
        if (strlen($s) == 1) return 1;
        $s = $this->init($s);
        $p = [];
        $mx = 0;
        $id = 0;
        $max = 0;
        $max_index = 0;
        for ($i = 1; $i < strlen($s); ++$i) {
            //基于一个很长的回文，那么在这个回文中的一个节点的回文长度和与很长回文中心点对称的另一个计算好的节点应该相等，考虑一种特殊情况，对应的这个点匹配到了很长回文外的一个点，那么这个长度可能会超过很长的回文的长度，所以判断取最小！
            if ($i < $mx)
                $p[$i] = min($p[2 * $id - $i], $mx - $i);
            else
                $p[$i] = 1;
            while ($s[$i - $p[$i]] == $s[$i + $p[$i]])
                $p[$i]++;
            if ($mx < $i + $p[$i]) {
                $id = $i;
                $mx = $i + $p[$i];
            }
            if ($p[$i] - 1 > $max) {
                $max = $p[$i] - 1;
                $max_index = $i;
            }
        }
        $palindrome = substr($s, $max_index - $max, 2 * $max);
        $result = str_replace("#", "", $palindrome);

        return $result;
    }

    function init($s)
    {
        $new = "~#";
        for ($i = 0; $i < strlen($s); ++$i) {
            $new .= $s[$i];
            $new .= "#";
        }
        $new .= "$";
        return $new;
    }

}

$class = new Q5();
$max = $class->longestPalindrome("cbbd");
echo $max;