<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/4/8
 * Time: 16:54
 */

$stack1 = new SplStack();
$stack2 = new SplStack();

function mypush($node)
{
    global $stack1;
    $stack1->push($node);
}

function mypop()
{
    global $stack1;
    global $stack2;
    if($stack2->isEmpty()){
        while (!$stack1->isEmpty()) {
            $stack2->push($stack1->pop());
        }
    }
    return $stack2->pop();
}
