<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/2/1
 * Time: 上午10:21
 */
namespace Sago\Taop;
require_once "C101.php";
require_once "C102.php";
require_once "C103.php";
require_once "C104.php";
require_once "C105.php";
require_once "C106.php";

echo "-------------字符串反转-------------" . PHP_EOL;
$c101 = new C101();
$str = ['a', 'b', 'c', 'd', 'e', 'f'];
$c101->reverseSeq($str, 0, 1);
$c101->reverseSeq($str, 2, 5);
$c101->reverseSeq($str, 0, 5);
echo print_r($str, true);

echo "-------------字符串包含-------------" . PHP_EOL;
$c102 = new C102();
$A = ['A', 'B', 'C', 'D'];
$B = ['B', 'A', 'E'];
echo $c102->strContain($A, $B) . PHP_EOL;

echo "-------------字符串转换成整数-------------" . PHP_EOL;
$c103 = new C103();
$res = $c103->strToInt("12345");
var_dump($res);

echo "-------------回文判断-------------" . PHP_EOL;
$c104 = new C104();
$res = $c104->isPalindrome(['a', 'b', 'c', 'b', 'a']);
echo $res . PHP_EOL;

echo "-------------最长回文子串-------------" . PHP_EOL;
//abacdcabbac
$str = ['#', 'a', '#', 'b', '#', 'a', '#', 'c', '#', 'd', '#', 'c', '#', 'a', '#', 'b', '#', 'b', '#', 'a', '#', 'c', '#'];
$c105 = new C105();
$res = $c105->maxSubPalindrome($str);
echo print_r($res, true) . PHP_EOL;

echo "-------------字符串全排列-------------" . PHP_EOL;
$c106 = new C106();
$str = ['a', 'b', 'c'];
$c106->permutation($str, 0, 2);
$res = $c106->getRes();
echo print_r($res, true) . PHP_EOL;