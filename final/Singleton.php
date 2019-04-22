<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/4/19
 * Time: 下午11:28
 */
class Singleton //饿汉式,php不允许饿汉
{
//    private static $_instance = new self();
//    private function __construct()
//    {
//    }
//    public static function getInstance()
//    {
//        return self::$_instance;
//    }
}

class Singleton2 //懒汉式
{
    private static $instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }
}

$lazy = Singleton2::getInstance();
var_dump($lazy);
