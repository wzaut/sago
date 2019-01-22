<?php

/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/1/22
 * Time: 下午4:34
 */

namespace Sago\Php;

require_once "SkipList.php";
require_once "SkipListNode.php";


$skip_list = new SkipList(4);
$skip_list->insert(6);
$skip_list->insert(2);
$skip_list->insert(3);
$skip_list->insert(11);


$find = $skip_list->find(3);
echo print_r($find, true);

$skip_list->delete(3);
$find = $skip_list->find(3);
echo print_r($find, true);
