<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/14
 * Time: 15:29
 */

use Action\Deque;
use Action\SingleLinkedList\Node;
use Action\SortBubble;

require'../vendor/autoload.php';

/**
 * 冒泡
 */
function SortBubble(){
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
}
//SortBubble();
$a = new Node(["A","B"]);

