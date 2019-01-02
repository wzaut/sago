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

$data = [1];
$search = new Search($data);
echo $search->bsearch(9);
