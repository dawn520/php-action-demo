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

require '../vendor/autoload.php';

/**
 * 冒泡
 */
function SortBubble()
{
    $stime = microtime(true);
    $arr = [12, 59, 2, 369, 1, 85, 6, 48, 96, 234, 878, 54, 21];
    $arr = [];
    for ($i = 0; $i < 10000; $i++) {
        $arr[$i] = rand(1, 10000000);
    }
    (new SortBubble())->descending($arr);
    $etime = microtime(true);//获取程序执行结束的时间
    $total = $etime - $stime;  //计算差值
    var_dump($arr);
    echo $total;
}

//SortBubble();

/**
 * 单向链表
 */
function SingleLinkedList()
{
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

//SingleLinkedList();
/**
 * 观察者模式
 */
function ObserverPattern()
{
    $event = new \Action\Patterns\Observer\Event();
    $event->addObserver(new \Action\Patterns\Observer\Observer1());
    $event->addObserver(new \Action\Patterns\Observer\Observer2());
    $event->doSomething();
}

//ObserverPattern();

/**
 * 给定一个数字a 生成a*a的数组
 * 例子：
 * int a=5;
 * 1  2  3  4  5
 * 16 17 18 19 6
 * 15 24 25 20 7
 * 14 23 22 21 8
 * 13 12 11 10 9
 *
 * @param int $a
 * @return mixed
 */
function createArray(int $a)
{
    $i = $j = $times = 0;
    $arr[0][0] = 1;
    $first = 2;
    $flag = 4;
    $b = $a - 1;
    while ($first <= $a * $a) {

        switch ($flag) {
            default:
            case 4:
                $j++;
                $arr[$i][$j] = $first;
                if ($j == $b - $times) {
                    $flag = 1; //下
                }
                $first++;
                break;
            case 1:
                $i++;
                $arr[$i][$j] = $first;
                if ($i == $b - $times) {
                    $flag = 2;
                }
                $first++;
                break;
            case 2:
                $j--;
                $arr[$i][$j] = $first;
                if ($j == $times) {
                    $flag = 3;
                    $times++;
                }
                $first++;
                break;
            case 3:
                $i--;
                $arr[$i][$j] = $first;
                if ($i == $times) {
                    $flag = 4;
                }
                $first++;
                break;

        }
    }
    return $arr;
}

$a = createArray(6);
foreach ($a as &$arr) {
    ksort($arr);
}
print_r($a);






























