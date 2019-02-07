<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/2/6
 * Time: 下午7:59
 */

namespace Sago\Php;
require_once "YangHui.php";

$yanghui = new YangHui();
$res = $yanghui->shortestWay(5);

echo print_r($res, true);
