<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/8
 * Time: 下午7:20
 */
require "./StatusCode.php";


class Arrays
{
    private $capacity;
    private $length;
    private $data;


    function __construct($capacity)
    {
        $this->capacity = $capacity;
        $this->data = Array();
    }

    private function checkIsFull()
    {
        if ($this->length >= $this->capacity) {
            return true;
        }
        return false;
    }

    private function checkOutOfBound($key)
    {
        if ($key < 0 || $key > $this->capacity - 1) {
            return true;
        }
        return false;
    }

    public function insert($key, $value)
    {
        $key = intval($key);
        if ($this->checkIsFull()) {
            return StatusCode::ARRAY_CAPACITY_FULL;
        }
        if ($this->checkOutOfBound($key)) {
            return StatusCode::ARRAY_INDEX_OUT_OF_BOUND;
        }
        $length = intval($this->length);
        if ($length < $key) {
            $this->data[$length] = $value;
        } else {
            for ($i = $length - 1; $i >= $key; --$i) {
                $this->data[$i + 1] = $this->data[$i];
            }

            $this->data[$key] = $value;
        }

        $this->length++;
        return StatusCode::SUCCESS;
    }

    public function delete($key)
    {
        if ($this->checkOutOfBound($key)) {
            return StatusCode::ARRAY_INDEX_OUT_OF_BOUND;
        }
        $length = intval($this->length);
        if ($key > $length - 1) {
            return StatusCode::ARRAY_EMPTY_INDEX_OF_VALUE;
        }

        if ($key == $length - 1) {
            unset($this->data[$key]);
        } else {
            for ($i = $key; $i < $length - 1; ++$i) {
                $this->data[$i] = $this->data[$i + 1];
            }
            unset($this->data[$length - 1]);
        }
        $this->length--;
        return StatusCode::SUCCESS;

    }

    public function find($key)
    {
        if ($this->checkOutOfBound($key)) {
            return StatusCode::ARRAY_INDEX_OUT_OF_BOUND;
        }
        $value = $this->data[$key];
        return $value;
    }

    public function printArray()
    {
        echo "key => value\r\n";
        foreach ($this->data as $key => $value) {
            echo $key . "=>" . $value . "\r\n";
        }
    }
}