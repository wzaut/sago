<?php

/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/12
 * Time: 下午11:52
 */
class Graph
{
    //用拓扑排序判断有向图中是否有环
    //topological sort
    public $graph;

    function __construct($graph)
    {
        $this->graph = $graph;//用邻接矩阵来存储图
    }

    function topoSort()
    {
        $graph = $this->graph;
        $inDegree = [];//入度
        for ($i = 0; $i < count($graph); ++$i) {
            for ($j = 0; $j < count($graph[]); ++$j) {
                if ($graph[$i][$j] == 1)
                    $inDegree[$j] = isset($inDegree[$j]) ? $inDegree[$j]++ : 1;
            }
        }

        $queue = new Queue();
        for ($i = 0; $i < count($graph); ++$i) {
            if (!isset($inDegree[$i]))
                $queue->enQueue($i);
        }
        while ($queue->count != 0) {
            $i = $queue->deQueue();
            echo $i . "->";
            for ($j = 0; $j < count($graph); ++$j) {
                if ($graph[$i][$j] == 1) {
                    $inDegree[$j]--;
                }
            }
        }

    }

}