<?php

namespace Sago\Php;

class SkipList
{
    private $linked_list;

    private $index_lvl;

    private $len;

    function __construct($linked_list)
    {
        $this->linked_list = $linked_list;
        $len = $this->linked_list->length;
        $this->len = $len;
        if ($len >= 4) {
            $this->index_lvl = intval(log($len, 2)) - 1;
            $this->indexing();
        } else {
            $this->index_lvl = 0;
        }

    }

    public function getIndexLvl()
    {
        return $this->index_lvl;
    }

    public function getLength()
    {
        return $this->len;
    }

    public function indexing()
    {

    }
}