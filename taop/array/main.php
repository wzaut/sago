<?php

namespace Sago\Taop;

require_once "C201.php";
require_once "C202.php";
require_once "C203.php";
require_once "C204.php";
require_once "C205.php";
require_once "C206.php";

echo "**2.1寻找第k小元素" . PHP_EOL;
$c201 = new C201();
$arr = [3, 5, 2, 1, 4, 9, 8, 6];
$k = $c201->minKthValue($arr, 5);
echo print_r($arr, true);
echo $k . PHP_EOL;

echo "**2.2找到数组中的两个数和为定值" . PHP_EOL;
$c202 = new C202();
$arr = [3, 5, 2, 1, 4, 9, 8, 6];
$res = $c202->findSumK($arr, 8);
var_dump($res);
$arr = [3, 5, 2, 1, 4, 9, 8, 6];
$res = $c202->findSumK2($arr, 8);
echo $res . PHP_EOL;

echo "**2.3寻找和为定值的多个数" . PHP_EOL;
$array_al = new C203();
$array_al->findMultiSumK([9, 5, 3, 2, 4, 1, 1, 2], 7, 6);

echo "**2.4最大连续子数组和" . PHP_EOL;
$c0204 = new C204();
$array = [1, -2, 3, 10, -4, 7, 2, -5];
$res = $c0204->findMaxSubArr($array);
echo $res . PHP_EOL;

$res = $c0204->findMaxSubArr2($array);
echo $res . PHP_EOL;

$res = $c0204->findMaxSubArr3($array);
echo $res . PHP_EOL;

echo "**2.5跳台阶" . PHP_EOL;
$jump_step = new C205();
$res = $jump_step->Fibonacci(4);
echo $res . PHP_EOL;

echo "**2.5跳台阶 解法二" . PHP_EOL;
$res = $jump_step->climbStairs2(4);
echo $res . PHP_EOL;

echo "**2.5数组全排列" . PHP_EOL;
$res = $jump_step->fullPermutations([1, 2, 3], 3);
echo print_r($res, true);

echo "**2.5换硬币问题" . PHP_EOL;
$res = $jump_step->exchangeMoney(5);
echo $res . PHP_EOL;

echo "**2.5换硬币问题" . PHP_EOL;
$res = $jump_step->changeCoin(6);
echo print_r($res, true);

echo "-----2.6 奇偶数排序问题-----" . PHP_EOL;
$arr = [2, 1, 3, 8, 9, 6, 2, 3, 10];
$c206 = new C206();
$c206->oddEvenOrder($arr);
echo print_r($arr, true);

