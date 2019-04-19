<?php

/**
 * Write an efficient algorithm that searches for a value in an m x n matrix. This matrix has the following properties:
 *
 * Integers in each row are sorted in ascending from left to right.
 * Integers in each column are sorted in ascending from top to bottom.
 * Example:
 *
 * Consider the following matrix:
 *
 * [
 * [1,   4,  7, 11, 15],
 * [2,   5,  8, 12, 19],
 * [3,   6,  9, 16, 22],
 * [10, 13, 14, 17, 24],
 * [18, 21, 23, 26, 30]
 * ]
 * Given target = 5, return true.
 *
 * Given target = 20, return false.
 */
class SearchMatrix
{
    //思路是从右上角开始，如果target大于则target一定不会出现在这一行，
    //如果target小于，则一定不会出现在这一列
    //复杂度O（m+n）
    function searchSortedMatrix($matrix, $target)
    {
        $row = 0;
        $col = count($matrix[0]) - 1;
        while ($row < count($matrix) && $col >= 0) {
            if ($target == $matrix[$row][$col])
                return true;
            elseif ($target > $matrix[$row][$col])
                $row++;
            else
                $col--;
        }
        return false;
    }
}

$matrix = [
    [1, 4, 7, 11, 15],
    [2, 5, 8, 12, 19],
    [3, 6, 9, 16, 22],
    [10, 13, 14, 17, 24],
    [18, 21, 23, 26, 30]
];
$target = 17;
$class = new SearchMatrix();
var_dump($class->searchSortedMatrix($matrix, $target));

