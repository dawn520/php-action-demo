<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/25
 * Time: 15:29
 */

namespace Action\Patterns\Observer;


class EventGenerator
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->receive();
        }
    }
}
