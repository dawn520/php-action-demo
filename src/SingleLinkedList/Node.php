<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/14
 * Time: 11:33
 */
namespace Action\SingleLinkedList;

class Node
{
    private $data;

    private $next;

    public function __construct($data, Node $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return Node
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param Node $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }
}
