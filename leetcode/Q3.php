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
        $tmp = [];
        $longest = [];
        for ($i = 0; $i < strlen($s); ++$i) {
            if ($i == 0 || !in_array($s[$i], $tmp)) {
                $tmp[] = $s[$i];
                if (count($tmp) >= count($longest))
                    $longest = $tmp;
            } else {
                $inx = 0;
                $tmp = [];
                foreach ($longest as $key => $value) {
                    if ($value == $s[$i])
                        $inx = $key;
                }
                for ($j = $inx + 1; $j < count($longest); ++$j) {
                    $tmp[] = $longest[$j];
                }
                $tmp[] = $s[$i];
            }
        }
        return count($longest);
    }
}

$s = "aabaab!bb";
$clazz = new Q3();
echo $clazz->lengthOfLongestSubstring($s);
