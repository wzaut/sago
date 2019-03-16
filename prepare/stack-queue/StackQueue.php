<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/16
 * Time: 下午12:26
 */
require_once "../Util/Stack.php";

class StackQueue
{
    //用两个栈实现队列的push和pop功能
    private $stack1;

    private $stack2;

    function __construct()
    {
        $this->stack1 = new Stack();
        $this->stack2 = new Stack();
    }

    function enQueue($data)
    {
        $this->stack1->push($data);
    }

    function deQueue()
    {
        if ($this->stack2->count == 0) {
            while ($this->stack1->count != 0) {
                $data = $this->stack1->pop();
                $this->stack2->push($data);
            }
        }
        $res = -1;
        if ($this->stack2->count != 0) {
            $res = $this->stack2->pop();
        }
        return $res;
    }

    function count()
    {
        $count = $this->stack1->count + $this->stack2->count;
        return $count;
    }

}