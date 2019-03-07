<?php

namespace Sago\Prepare\Lru;
require_once "Node.php";

class LRU
{
    public $capacity;

    public $head;

    public $tail;

    public $pool;

    function __construct($cap)
    {
        $this->capacity = $cap;
        $this->head = new Node(null, null);
        $this->tail = new Node(null, null);
        $this->pool = array();
        $this->head->next = $this->tail;
        $this->tail->pre = $this->head;
    }

    function get($key)
    {
        $n = $this->pool[$key];
        if (!empty($n)) {
            $n->pre->next = $n->next;
            $n->next->pre = $n->pre;
            $this->addHead($n);
            return $n->value;
        }
        return -1;
    }

    function set($key, $value)
    {
        if (isset($this->pool[$key])) {//存在key,直接更新value,并移到队头
            $n = $this->pool[$key];
            $n->value = $value;
            $n->pre->next = $n->next;
            $n->next->pre = $n->pre;
            $this->addHead($n);
            return;
        }
        //不存在key,需添加
        if (count($this->pool) == $this->capacity) {//需要淘汰
            $del_n = $this->tail->pre;
            $this->tail->pre = $del_n->pre;
            $del_n->pre->next = $this->tail;
            unset($this->pool[$del_n->key]);
        }
        //新增
        $n = new Node($key, $value);
        $this->pool[$key] = $n;
        $this->addHead($n);
    }

    function addHead($n)
    {
        $n->pre = $this->head;
        $n->next = $this->head->next;
        $this->head->next->pre = $n;
        $this->head->next = $n;
    }

    function print_pool()
    {
        echo "head <=> ";
        $n = $this->head->next;
        while (!empty($n->value)) {
            echo $n->value . " <=> ";
            $n = $n->next;
        }
        echo "tail" . "\n";
    }

}