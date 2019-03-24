<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/24
 * Time: 下午9:20
 */

require_once "Polygon.php";

$P0 = array(0, 0);
$P1 = array(6, 0);
$P2 = array(6, 4);
$P3 = array(2, 4);
$P4 = array(2, 2);
$P5 = array(0, 2);

$polygon = new Polygon();
$polygon->points = [$P0, $P1, $P2, $P3, $P4, $P5];
$polygon->dividePolygon(4);
