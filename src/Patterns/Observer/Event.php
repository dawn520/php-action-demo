<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/25
 * Time: 15:35
 */

namespace Action\Patterns\Observer;


class Event extends EventGenerator
{
    public function doSomething(){
        $this->notify();
    }
}
