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
    private $length;
    private $data;


    function __construct($length)
    {
        $this->length = $length;
        $this->data = Array();
    }

    private function checkIsFull()
    {
        if (count($this->data) >= $this->length) {
            return true;
        }
        return false;
    }

    public function insert($key, $value)
    {
        if ($this->checkIsFull()) {
            throw new Exception(sprintf("Array out of capacity: %s", $this->length));
        }
        $this->data[$key] = $value;
        return StatusCode::SUCCESS;
    }

    public function delete($key)
    {
        if(isset($this->data[$key])){
            unset()
        }
    }

    public function printArray()
    {
        echo "key => value\r\n";
        foreach ($this->data as $key => $value) {
            echo $key . "=>" . $value . "\r\n";
        }
    }
}