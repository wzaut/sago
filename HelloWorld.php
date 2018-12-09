<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/8
 * Time: 下午6:10
 */
class HelloWorld
{
    public function sayHello($name){

        error_log('error log!!');


        return "hello! " . $name;


    }

}