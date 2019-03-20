<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/20
 * Time: 14:41
 */

class ListNode
{
    var $val;
    var $next = NULL;

    function __construct($x)
    {
        $this->val = $x;
    }
}

/**
 * 暴力反转链表 使用php数组反转函数array_reverse
 *
 * @param $head
 * @return array
 */

function printListFromTailToHead1($head)
{
    $array = [];
    while ($head !== null) {
        $array[] = $head->val;
        $head = $head->next;
    }
    return array_reverse($array);
}

/**
 * 迭代
 *
 * @param $head
 * @param array $array
 * @return array|null
 */
function printListFromTailToHead($head, $array = [])
{
    if ($head === null) {
        return [];
    }
    if ($head->val !== null) {
        if ($head->next != null) {
            $array = printListFromTailToHead($head->next, $array);
        }
        $array[] = $head->val;
    }
    return $array;
}

$a = new ListNode(58);
$b = new ListNode(24);
$b->next = $a;
$c = new ListNode(0);
$c->next = $b;
$d = new ListNode(67);
$d->next = $c;
//var_dump($d);67,0,24,58
var_dump(printListFromTailToHead1($d));
