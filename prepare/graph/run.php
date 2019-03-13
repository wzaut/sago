<?php
/**
 * Created by PhpStorm.
 * User: vega-001
 * Date: 19/3/13
 * Time: 上午11:35
 */

require_once "Graph.php";

$graph = [
    [0, 1, 0, 0],
    [0, 0, 0, 0],
    [1, 1, 0, 0],
    [0, 1, 1, 0]
];
$graph_class = new Graph($graph);
$res = $graph_class->topoSort();
echo print_r($res, true);
if (count($res) == count($graph)) {
    echo "no circle";
} else {
    echo "has circle";
}
