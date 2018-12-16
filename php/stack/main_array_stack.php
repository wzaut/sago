<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/16
 * Time: 下午6:02
 */
namespace Sago\Php;

require_once "../StatusCode.php";
require_once "ArrayStack.php";

echo ">>>>>>>>>>>>>>>>>顺式栈>>>>>>>>>>>>>>>>>" . PHP_EOL;

$arr_stack = new ArrayStack(4);

$arr_stack->push(1);
$arr_stack->push(2);
$arr_stack->push(3);
$arr_stack->push(4);

var_dump($arr_stack->push(5));

$arr_stack->printArrayStack();

echo ">>>>>>>>>>>>>>>>>出栈>>>>>>>>>>>>>>>>>" . PHP_EOL;

$arr_stack->pop();
$arr_stack->pop();

$arr_stack->printArrayStack();

