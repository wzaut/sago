<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/16
 * Time: 下午9:37
 */

require_once "Binary.php";


$class = new Binary();
echo $class->decimalToBinary(4) . "\n";
echo $class->decimalToBinary(-4) . "\n";
echo $class->decimalToBinary(5) . "\n";
echo $class->decimalToBinary(-5) . "\n";