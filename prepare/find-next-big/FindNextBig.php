<?php

require_once "../Util/Stack.php";

class FindNextBig
{
    function findNextFirstBigOne($arr)
    {
        $data = [];
        $stack = new Stack();
        $stack->push(0);
        for ($i = 1; $i < count($arr); ++$i) {
            while ($stack->count != 0 && $arr[$i] > $arr[$stack->getTop()]) {
                $data[$stack->getTop()] = $arr[$i];
                $stack->pop();
            }
            $stack->push($i);
        }
        while ($stack->count != 0) {
            $data[$stack->pop()] = -1;
        }
        return $data;
    }
}