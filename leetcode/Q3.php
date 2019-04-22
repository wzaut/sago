<?php

/**
 * Given a string, find the length of the longest substring without repeating characters.
 * Input: "pwwkew"
 * Output: 3
 * Explanation: The answer is "wke", with the length of 3.
 * Note that the answer must be a substring, "pwke" is a subsequence and not a substring.
 */
class Q3
{
    function lengthOfLongestSubstring($s)
    {
        if (strlen($s) == 0)
            return 0;
        $hash = [];
        $j = 0;
        $max = 0;
        for ($i = 0; $i < strlen($s); ++$i) {
            if (isset($hash[$s[$i]])) {
                $j = max($j, $hash[$s[$i]] + 1);
            }
            $hash[$s[$i]] = $i;
            $max = max($max, $i - $j + 1);
        }
        return $max;
    }
}

$s = "abcabcbb";
$clazz = new Q3();
echo $clazz->lengthOfLongestSubstring($s);
