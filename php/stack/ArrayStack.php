<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/16
 * Time: 下午5:42
 */

namespace Sago\Php;


class ArrayStack
{
    /*
     * 大小
     */
    private $capacity;

    /*
     * 元素个数
     */
    private $count;

    /*
     * 元素（存储在数组中）
     */
    private $items;

    /*
     * 构造函数
     */
    function __construct($capacity)
    {
        $this->capacity = $capacity;

        $this->count = 0;

        $this->items = array();

    }

    /*
     * 入栈
     */
    public function push($data)
    {
        if ($this->count >= $this->capacity) {
            return StatusCode::STACK_FULL_CAPACITY;
        }
        $this->items[] = $data;

        $this->count++;

        return StatusCode::SUCCESS;
    }

    /*
     * 出栈
     *
     */

    public function pop()
    {
        if ($this->count <= 0) {
            return StatusCode::STACK_EMPTY;
        }
        array_pop($this->items);

        $this->count--;

        return StatusCode::SUCCESS;
    }

    /*
     * 打印
     */
    public function printArrayStack()
    {
        echo print_r($this->items, true);
    }

}