<?php

class Q9
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0 || ($x % 10 == 0 && $x != 0))
            return false;
        $tmp = 0;
        while ($x > $tmp) {
            $tmp = $tmp * 10 + $x % 10;
            $x = intval($x / 10);
        }
        return $tmp == $x || intval($tmp / 10) == $x;
    }
}

$class = new Q9();
var_dump($class->isPalindrome(11));
