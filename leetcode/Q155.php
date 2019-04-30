<?php

class MinStack
{
    /**
     * initialize your data structure here.
     */
    private $stack;
    private $min;

    function __construct()
    {
        $this->stack = new SplStack();
        $this->min = PHP_INT_MAX;
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        if ($x <= $this->min) {
            $this->stack->push($this->min);
            $this->min = $x;

        }
        $this->stack->push($x);
    }

    /**
     * @return NULL
     */
    function pop()
    {
        if ($this->stack->pop() == $this->min)
            $this->min = $this->stack->pop();
    }

    /**
     * @return Integer
     */
    function top()
    {
        return $this->stack->top();
    }

    /**
     * @return Integer
     */
    function getMin()
    {
        return $this->min;
    }
}

$minStack = new MinStack();
$minStack->push(0);
$minStack->push(1);
$minStack->push(0);
echo $minStack->getMin();
$minStack->pop();
echo $minStack->getMin();
