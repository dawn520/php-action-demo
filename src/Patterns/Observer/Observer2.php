<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/25
 * Time: 15:33
 */

namespace Action\Patterns\Observer;


class Observer2 implements Observer
{

    public function receive()
    {
        echo "Observer2 has received message\n";
    }
}
