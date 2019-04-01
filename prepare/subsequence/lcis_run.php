<?php
require_once "LCIS.php";

$arr = [1, 5, 6, 3, 4, 2, 9, 3, 5, 8, 13, 2];
$lcis = new LCIS($arr, 0);

echo print_r($lcis->max, true);