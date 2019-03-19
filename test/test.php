<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/14
 * Time: 15:29
 */

use Action\Deque;
use Action\SingleLinkedList\Node;
use Action\SingleLinkedList\SingleLinkedList;
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

/**
 * 单向链表
 */
function SingleLinkedList(){
    $a = new Node("张三");
    $b = new Node('李四');
    $c = new Node("王五");
    $d = new Node('赵六');
    $e = new Node('孙七');

    $link = new SingleLinkedList($a);
//    var_dump($link);
    $link->addNode($b);
//    var_dump($link);
    $link->addNode($c);
//    var_dump($link);
    $link->addNode($d);
//    var_dump($link);
    $link->addNode($e);
//    var_dump($link);
//
//    $f = new Node('周八');
//    $link->insertNode($f,2);
//    var_dump($link);
//
//    $link->delNode(2);
//    var_dump($link);

    var_dump($link->reserveLink());

}
SingleLinkedList();
