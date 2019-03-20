<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/20
 * Time: 10:25
 */


/**
 * 直接使用php函数
 *
 * @param $str
 * @return mixed
 */
function replaceSpace($str)
{
    return str_replace(' ', '%20', $str);
}

/**
 * 不使用其他php的函数
 *
 * @param $str
 * @return mixed
 */
function replaceSpace1($str)
{
    $number = 0;
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == ' ') {
            $number++;
        }
    }
    $newLength = $length + $number * 2;

    $j = 0;
    for ($i = $length - 1; $i >= 0; $i--) {
        echo $i . '---' . $str[$i] . "\n";
        if ($str[$i] == ' ') {
            $str[$newLength - 1 - $j - 2] = '%';
            $str[$newLength - 1 - $j - 1] = '2';
            $str[$newLength - 1 - $j] = '0';

            $j += 3;
        } else {
            $str[$newLength - 1 - $j] = $str[$i];
            $j++;
        }
    }
    return $str;
}

var_dump(replaceSpace1('We Are Happy.'));
