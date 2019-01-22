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


$skip_list = new SkipList(16);
$forwards = $skip_list->insert(6);
$forwards = $skip_list->insert(2);

echo print_r($forwards, true);

