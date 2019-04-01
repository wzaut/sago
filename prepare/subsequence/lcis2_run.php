<?php

require_once "LCIS2.php";

$arr = [1, 5, 6, 3, 4, 2, 9, 3, 5, 8, 13, 2];
$lcis = new LCIS2();
$res = $lcis->solution($arr);

echo print_r($res, true);