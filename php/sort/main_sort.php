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

echo ">>>>>>>>>>>>>>>>>Insertion Sort>>>>>>>>>>>>>>>>>" . PHP_EOL;

$sort = new Sort($data);
echo print_r($sort->insertion_sort(), true);

echo ">>>>>>>>>>>>>>>>>Selection Sort>>>>>>>>>>>>>>>>>" . PHP_EOL;

$sort = new Sort($data);
echo print_r($sort->selection_sort(), true);

echo ">>>>>>>>>>>>>>>>>Merge Sort>>>>>>>>>>>>>>>>>" . PHP_EOL;

$sort = new Sort($data);
echo print_r($sort->merge_sort(), true);