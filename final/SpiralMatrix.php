<?php


class SpiralMatrix
{
    /*
     * Given a matrix of m x n elements (m rows, n columns), return all elements of the matrix in spiral order.

Example 1:

Input:
[
 [ 1, 2, 3 ],
 [ 4, 5, 6 ],
 [ 7, 8, 9 ]
]
Output: [1,2,3,6,9,8,7,4,5]
     */
    function solution($matrix)
    {
        $res_arr = [];
        $row_begin = 0;
        $row_end = count($matrix) - 1;
        $col_begin = 0;
        $col_end = count($matrix[0]) - 1;
        while ($row_begin <= $row_end && $col_begin <= $col_end) {
            //traverse right
            for ($j = $col_begin; $j <= $col_end; ++$j)
                $res_arr[] = $matrix[$row_begin][$j];
            $row_begin++;


            //traverse down
            for ($i = $row_begin; $i <= $row_end; ++$i)
                $res_arr[] = $matrix[$i][$col_end];
            $col_end--;

            if ($row_end >= $row_begin) { //traverse left
                for ($j = $col_end; $j >= $col_begin; --$j)
                    $res_arr[] = $matrix[$row_end][$j];
                $row_end--;
            }
            if ($col_end >= $col_begin) { //traverse up
                for ($i = $row_end; $i >= $row_begin; --$i)
                    $res_arr[] = $matrix[$i][$col_begin];
                $col_begin++;
            }
        }
        return $res_arr;
    }
}

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$clazz = new SpiralMatrix();
echo print_r($clazz->solution($matrix), true);