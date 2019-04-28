<?php

class LRUCache {
    /**
     * @param Integer $capacity
     */
    public $cap;
    public $head;
    public $tail;
    public $lru = [];

    function __construct($capacity) {
        $this->cap = $capacity;
        $this->head = new Node(null, null);
        $this->tail = new Node(null, null);
        $this->head->next =$this->tail;
        $this->tail->pre =$this->head;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if (!isset($this->lru[$key])) return -1;
        $this->moveToHead($this->lru[$key]);
        return $this->lru[$key]->value;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if (isset($this->lru[$key])) {
            $this->lru[$key]->value = $value;
            $this->moveToHead($this->lru[$key]);
            return;
        }
        $node = new Node($key, $value);
        if (count($this->lru) < $this->cap) {
            $this->addToHead($node);
        } else {
            //move tail node first
            $tmp = $this->tail->pre;
            $this->tail->pre = $tmp->pre;
            $tmp->pre->next = $this->tail;
            unset($this->lru[$tmp->key]);
            $this->addToHead($node);
        }
        $this->lru[$key] = $node;

    }
    function moveToHead($node) {
        $node->next->pre = $node->pre;
        $node->pre->next = $node->next;
        $this->head->next->pre = $node;
        $node->next = $this->head->next;
        $this->head->next = $node;
        $node->pre = $this->head;
    }
    function addToHead($node) {
        $this->head->next->pre = $node;
        $node->next = $this->head->next;
        $this->head->next = $node;
        $node->pre = $this->head;
    }
}

class Node
{
    public $key;
    public $value;
    public $pre;
    public $next;
    function __construct($key, $value) {
        $this->key = $key;
        $this->value = $value;
        $this->pre = null;
        $this->next = null;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */
$lru = new LRUCache(2);
$lru->put(1,1);
$lru->put(2,2);
echo print_r($lru->lru);