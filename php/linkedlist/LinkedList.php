<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 18/12/10
 * Time: 上午11:01
 */
require_once "./LinkedListNode.php";
require "../StatusCode.php";


class LinkedList
{

    private $length;

    /*
     * 哨兵节点 data=null, next指向第一个node
     */
    public $head;


    function __construct()
    {
        $this->head = new LinkedListNode(null);
        $this->length = 0;
    }

    public function getLength()
    {
        return $this->length;
    }


    public function insertTail($data)
    {
        $new_node = new LinkedListNode($data);

        $tail_node = $this->head;
        $i = 0;
        while ($i < $this->length) {
            $tail_node = $tail_node->next;
            ++$i;
        }

        $tail_node->next = $new_node;

        $this->length++;

    }

    public function deleteTail()
    {

        if ($this->length <= 0) {
            return StatusCode::LINKED_LIST_EMPTY;
        }
        $tail_node = $this->head;
        $i = 1;
        while ($i < $this->length) {
            $tail_node = $tail_node->next;
            ++$i;
        }

        $tail_node->next = null;
        $this->length--;
    }

    public function insertHead($data)
    {
        $new_node = new LinkedListNode($data);

        $new_node->next = $this->head->next;

        $this->head->next = $new_node;
        $this->length++;
    }

    public function deleteHead()
    {
        if ($this->length <= 0) {
            return StatusCode::LINKED_LIST_EMPTY;
        }
        $this->head->next = $this->head->next->next;
        $this->length--;
    }


    public function insert($pos, $data)
    {
        if ($pos < 0 || $pos > $this->length) {
            return StatusCode::LINKED_LIST_OUT_OF_BOUND;
        }
        $new_node = new LinkedListNode($data);

        $cur_node = $this->head;
        for ($i = 0; $i < $pos; ++$i) {
            $cur_node = $cur_node->next;
        }
        $new_node->next = $cur_node->next;
        $cur_node->next = $new_node;

        $this->length++;
    }

    public function delete($pos)
    {
        if ($pos < 1 || $pos > $this->length) {
            return StatusCode::LINKED_LIST_OUT_OF_BOUND;
        }
        $cur_node = $this->head;
        for ($i = 1; $i < $pos; ++$i) {
            $cur_node = $cur_node->next;
        }
        $cur_node->next = $cur_node->next->next;
        $this->length--;

    }

    public function findNode($pos)
    {

        if ($this->length < $pos || $pos < 1) {
            return StatusCode::LINKED_LIST_OUT_OF_BOUND;
        }

        $find_node = $this->head;
        $i = 1;
        while ($i <= $pos) {
            $find_node = $find_node->next;
            ++$i;
        }
        return $find_node->data;
    }

    //handle by nodes
    public function insertNode(LinkedListNode $node1, LinkedListNode $node2)
    {
        $node2->next = $node1->next;
        $node1->next = $node2;
        $this->length++;

    }

    public function insertNodePre(LinkedListNode $node1, LinkedListNode $node2)
    {
        $pre_node = $this->getPreNode($node1);
        $this->insertNode($pre_node, $node2);
    }

    public function deleteNode(LinkedListNode $node)
    {
        $pre_node = $this->getPreNode($node);
        if ($pre_node == null) {
            return StatusCode::LINKED_LIST_NODE_NOT_EXIST;
        }
        $pre_node->next = $pre_node->next->next;

        $this->length--;
    }

    public function getPreNode(LinkedListNode $node)
    {
        $i = 0;
        $pre_node = $this->head;
        while ($i < $this->length) {
            if ($pre_node->next === $node && $pre_node != null) {
                return $pre_node;
            }
            $pre_node = $pre_node->next;
            ++$i;
        }

        return null;
    }

    public function reverse()
    {
        if ($this->length <= 1) {
            return StatusCode::LINKED_LIST_CAN_NOT_REVERSE;
        }
        $new_head_node = null;
        for ($j = $this->length; $j > 0; --$j) {
            $tail_node = $this->head;

            for ($i = 0; $i < $j; ++$i) {
                $tail_node = $tail_node->next;
            }

            if ($j == $this->length) {
                $new_head_node = $tail_node;
            }
            $pre_node = $this->getPreNode($tail_node);
            $tail_node->next = empty($pre_node->data) ? null : $pre_node;
        }

        $this->head->next = $new_head_node;


    }

    public function printList()
    {
        $cur_node = $this->head;
        echo "head -> ";
        while ($cur_node->next != null) {
            echo $cur_node->next->data . ' -> ';
            $cur_node = $cur_node->next;
        }
        echo "null" . "\r\n";
    }

}