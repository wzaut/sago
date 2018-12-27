<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2018/12/27
 * Time: 下午10:29
 */

namespace Sago\Php;

require_once "LinearSort.php";
require_once "../StatusCode.php";

$data = [2, 5, 3, 0, 2, 3, 0, 3];
$linear_sort = new LinearSort($data);
$sort = $linear_sort->counting_sort();
echo print_r($sort, true);

