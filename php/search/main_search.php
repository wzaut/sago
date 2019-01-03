<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/1/2
 * Time: 下午9:48
 */

namespace Sago\Php;
require_once "../StatusCode.php";
require_once "Search.php";

$data = [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 8, 7 => 9, 8 => 9, 9 => 9, 10 => 12];
$search = new Search($data);
echo $search->bsearch(9);
echo PHP_EOL;
echo $search->bsearch2(9);

echo PHP_EOL;
$data = [1, 2, 3, 3, 5, 6, 7, 10];
$search = new Search($data);
echo $search->bsearch3(1);
