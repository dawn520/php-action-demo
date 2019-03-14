<?php
/**
 * 排序 - 冒泡法
 *
 * User: xixi
 * Date: 2018/2/5
 * Time: 14:54
 */
namespace Action;

class SortBubble
{
    /**
     * 正序
     *
     * @param $arr
     */
    public function ascending(&$arr)
    {
        $arrNumber = count($arr);
        $flag = true;
        for ($j = 0; $j < $arrNumber - 1 && $flag; $j++) {
            $flag = false;
            for ($i = 0; $i < $arrNumber - 1 - $j; $i++) {
                $a = $arr[$i];
                $b = $arr[$i + 1];
                if ($b < $a) {
                    $arr[$i + 1] = $a;
                    $arr[$i] = $b;
                    $flag = true;
                }
            }
        }
    }

    /**
     * 倒序
     *
     * @param $arr
     */
    public function descending(&$arr)
    {
        $arrNumber = count($arr);
        $flag = true;
        for ($j = 0; $j < $arrNumber - 1 && $flag; $j++) {
            for ($i = 0; $i < $arrNumber - 1 - $j; $i++) {
                $a = $arr[$i];
                $b = $arr[$i + 1];
                if ($b > $a) {
                    $arr[$i + 1] = $a;
                    $arr[$i] = $b;
                    $flag = true;
                }
            }
        }
    }
}

