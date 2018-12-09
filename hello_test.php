<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/8
 * Time: 下午6:12
 */

require "./HelloWorld.php";

$hello = new HelloWorld();

$result = $hello->sayHello('WORLD!!!');

echo $result;