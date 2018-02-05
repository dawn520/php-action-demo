<?php
/**
 * 排序 - 冒泡法
 *
 * User: xixi
 * Date: 2018/2/5
 * Time: 14:54
 */

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

$stime=microtime(true);
$arr = [12, 59, 2, 369, 1, 85, 6, 48, 96, 234, 878, 54, 21];
$arr = [];
for ($i = 0; $i < 10000; $i++) {
    $arr[$i] = rand(1, 10000000);
}
(new SortBubble())->descending($arr);
$etime=microtime(true);//获取程序执行结束的时间
$total=$etime-$stime;  //计算差值
var_dump($arr);
echo $total;