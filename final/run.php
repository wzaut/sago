<?php

require_once "AbsDiffValue.php";

$arr = [-3, -2, -2, -1, 0, 2, 3, 3, 15];
$clazz = new AbsDiffValue();
echo $clazz->countAbsValues($arr);