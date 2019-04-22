<?php

require_once "../prepare/Util/Stack.php";

class Q20
{
    /**
     * @param String $s
     * @return bool
     */
    function isValid($s)
    {
        $open = ['(', '{', '['];
        $close = [')', '}', ']'];
        $key = [')' => 0, '}' => 1, ']' => 2];

        $stack = new Stack();
        for ($i = 0; $i < strlen($s); ++$i) {
            if (in_array($s[$i], $open)) {
                $stack->push($s[$i]);
            } elseif (in_array($s[$i], $close)) {
                if ($stack->pop() != $open[$key[$s[$i]]])
                    return false;
            }
        }

        return $stack->count == 0;
    }

}

$s = "([)]{}";
$class = new Q20();
var_dump($class->isValid($s));