<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/19
 * Time: 16:17
 * Description: 分治法（不使用php数组函数）从左下角开始
 * @param $target
 * @param $array
 * @return bool
 */
function Find($target, $array)
{
    $arrayLength = count($array);
    $y = 0;
    $x = $arrayLength - 1;
    while ($x >= 0 && $y < count($array[0])) {
        if ($target == $array[$x][$y]) {
            return true;
        } else if ($target > $array[$x][$y]) {
            $y++;
        } else {
            $x--;
        }
    }
    return false;
}

$a = [
    [1, 2, 8, 9],
    [2, 4, 9, 12],
    [4, 7, 10, 13],
    [6, 8, 11, 15]
];

var_dump(find(11, $a));
