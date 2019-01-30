<?php

namespace Sago\taop;

require_once "C203.php";
require_once "C204.php";
require_once "C205.php";

echo "**2.3寻找和为定值的多个数" . PHP_EOL;
$array_al = new C203();
$array_al->sumOfkNumber([9, 5, 3, 2, 4, 1, 1, 2], 8, 6);

echo "**2.4最大连续子数组和" . PHP_EOL;
$c0204 = new C204();
$array = [1, -2, 3, 10, -4, 7, 2, -5];
$res = $c0204->maxConSubArr($array);
echo $res . PHP_EOL;

$res = $c0204->maxConSubArr2($array);
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

