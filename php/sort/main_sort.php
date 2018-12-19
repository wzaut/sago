<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 18/12/19
 * Time: 上午11:32
 */

namespace Sago\Php;

require_once "Sort.php";
require_once "../StatusCode.php";

$data = [3, 4, 2, 6, 1, 5, 2];

echo ">>>>>>>>>>>>>>>>>Bubble Sort>>>>>>>>>>>>>>>>>" . PHP_EOL;

$sort = new Sort($data);
echo print_r($sort->bubble_sort(), true);

echo ">>>>>>>>>>>>>>>>>Insert Sort>>>>>>>>>>>>>>>>>" . PHP_EOL;

$sort = new Sort($data);
echo print_r($sort->insertion_sort(), true);