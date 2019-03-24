<?php

require_once "../Util/Queue.php";

class Polygon
{
    public $points;

    function __construct()
    {
        $this->points = array();
    }

    // 等分多边形，打印出等分点的坐标
    function dividePolygon($k)
    {
        $arr = $this->points;
        $count = count($this->points);
        $max_len = $this->calculateMaxLen($arr, $count); //求周长
        $divide_len = $max_len / $k; //平均分长度
        $len = 0;
        $queue = new Queue();
        for ($i = 1; $i < $count; ++$i) {
            $queue->enQueue($arr[$i]);
        }
        $queue->enQueue($arr[0]);
        $point = [0, 0];
        $next_point = [0, 0];
        while ($len <= $max_len - $divide_len) {
            if ($len % $divide_len == 0)
                echo "x:" . $point[0] . " y:" . $point[1] . "\n";
            if ($point == $next_point)
                $next_point = $queue->deQueue();
            if ($next_point[0] == $point[0]) {
                if ($next_point[1] > $point[1])
                    $point[1]++;
                else
                    $point[1]--;
            } else {
                if ($next_point[0] > $point[0])
                    $point[0]++;
                else
                    $point[0]--;
            }
            $len++;
        }
    }

    //计算多边形周长
    function calculateMaxLen($arr, $count)
    {
        $max_len = abs($arr[0][0] - $arr[$count - 1][0] + $arr[0][1] - $arr[$count - 1][1]);
        for ($i = 1; $i < $count; ++$i) {
            $max_len += abs($arr[$i][0] - $arr[$i - 1][0] + $arr[$i][1] - $arr[$i - 1][1]);
        }

        return $max_len;
    }


}