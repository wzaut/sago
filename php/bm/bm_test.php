<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 18/12/7
 * Time: 下午4:01
 */
use Sago\Php\BM;
require_once "BM.php";

//$main=[a,b,a,c,b,b,a,b,c,d], $pattern=[a,b,c];
$bm = new BM();
$main = ['a', 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'a', 'b', 'a', 'a'];
$pattern = ['b', 'a', 'b', 'a'];
$result = $bm->bmSearch($main, $pattern);

echo $result;