<?php
/**
 * 双向队列
 *
 * User: zhouchenxi
 * Date: 2017/8/9
 * Time: 14:07
 */
namespace Action;

class Deque
{
    private $queue = array();

    /**
     * 头部入列
     *
     * @param $item
     * @return int
     */
    public function addFirst($item){
        return array_unshift($this->queue,$item);
    }

    /**
     * 尾部入列
     *
     * @param $item
     * @return int
     */
    public function addLast($item){
        return array_push($this->queue,$item);
    }

    /**
     * 头部出列
     *
     * @return mixed
     */
    public function  removeFirst(){
        return array_shift($this->queue);
    }

    /**
     * 尾部出列
     *
     * @return mixed
     */
    public function  removeLast(){
        return array_pop($this->queue);
    }

    /**
     * 清空队列
     */
    public function clear(){
        unset($this->queue);
    }

    /**
     * 获取列头
     *
     * @return mixed
     */
    public function getFirst(){
        return reset($this->queue);
    }

    /**
     * 获取列尾
     *
     * @return mixed
     */
    public function getLast(){
        return end($this->queue);
    }

    /**
     * 获取队列长度
     *
     * @return int
     */
    public function getLength(){
        return count($this->queue);
    }

}
