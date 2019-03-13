<?php

require_once "../Util/Queue.php";

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
        $res = [];
        $graph = $this->graph;
        $inDegree = [];//入度
        for ($i = 0; $i < count($graph); ++$i) {
            $inDegree[$i] = 0;
        }
        for ($i = 0; $i < count($graph); ++$i) {
            for ($j = 0; $j < count($graph); ++$j) {
                if ($graph[$i][$j] == 1)
                    $inDegree[$j]++;
            }
        }
        $queue = new Queue();
        for ($i = 0; $i < count($graph); ++$i) {
            if ($inDegree[$i] == 0){
                $queue->enQueue($i);
                unset($inDegree[$i]);
            }
        }
        while ($queue->count > 0) {
            $i = $queue->deQueue();
            $res[] = $i;
            for ($j = 0; $j < count($graph); ++$j) {
                if ($graph[$i][$j] == 1) {
                    $inDegree[$j]--;
                }
            }
            foreach($inDegree as $key => $value) {
                if ($value == 0){
                    $queue->enQueue($key);
                    unset($inDegree[$key]);
                }
            }
        }

        return $res;
    }

}