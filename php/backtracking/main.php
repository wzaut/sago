<?php

namespace Sago\Php;

require_once "BackTracking.php";
/*
 *   0 1 2 3
 * 0|1 3 5 9
 * 1|2 1 3 4
 * 2|5 2 6 7
 * 3|6 8 4 3
 */

$arr = array();
$arr[0][0] = 1;
$arr[0][1] = 3;
$arr[0][2] = 5;
$arr[0][3] = 9;

$arr[1][0] = 2;
$arr[1][1] = 1;
$arr[1][2] = 3;
$arr[1][3] = 4;

$arr[2][0] = 5;
$arr[2][1] = 2;
$arr[2][2] = 6;
$arr[2][3] = 7;

$arr[3][0] = 6;
$arr[3][1] = 8;
$arr[3][2] = 4;
$arr[3][3] = 3;

$dist = 0;
$back_tracking = new BackTracking();
$back_tracking->minDistBT(0, 0, $dist, $arr, 3);
echo $back_tracking->printMinDist();




