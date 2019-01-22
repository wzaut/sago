<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/1/9
 * Time: 上午10:53
 */

namespace Sago\Php;

class SkipList
{
    private $max_level;

    private $level_count;

    private $head;

    function __construct($max_level)
    {
        $this->max_level = $max_level;
        $this->level_count = 1;
        $this->head = new SkipListNode();
    }

    private function randomLevel()
    {
        $level = 1;
        for ($i = 0; $i < $this->max_level; ++$i) {
            if (rand(1, 100) % 2 == 1) {
                $level++;
            }
        }
        return $level;
    }

    public function insert($value)
    {
        $level = $this->randomLevel();
        $new_node = new SkipListNode();
        $new_node->data = $value;
        $new_node->max_level = $level;

        $update = array();

        for ($i = 0; $i < $level; ++$i) {
            $update[$i] = $this->head;
        }

        //record every level largest value which smaller than insert in update[]
        $p = $this->head;
        for ($i = $level - 1; $i >= 0; --$i) {
            while (isset($p->forwards[$i]) && $p->forwards[$i]->data < $value) {
                $p = $p->forwards[$i];
            }
            $update[$i] = $p; //use update save node in search path
            $p->forwards[$i] = $new_node;
        }

        //in search path node next node become new node forwards(next)
        for ($i = 0; $i < $level; ++$i) {
            $new_node->forwards[$i] = $update[$i]->forwards[$i];
        }

        if ($this->level_count < $level) {
            $this->level_count = $level;
        }

        return $this->head->forwards;
    }

    public function find($value)
    {
        $p = $this->head;

        for ($i = $this->level_count - 1; $i >= 0; --$i) {
            while ($p->forwards[$i] != null && $p->forwards[$i]->data < $value) {
                $p = $p->forwards[$i];
            }
        }

        if ($p->forwards[0] != null && $p->forwards[0]->data == $value) {
            return $p->forwards[0];
        }
        return null;
    }
}