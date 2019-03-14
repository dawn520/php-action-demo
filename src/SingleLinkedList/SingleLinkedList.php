<?php
/**
 * 单向链表
 *
 * User: xixi
 * Date: 2018/10/10
 * Time: 9:57
 */

namespace Action\SingleLinkedList;


class SingleLinkedList
{
    private $header;

    /**
     * 初始化链表
     *
     * SingleLinkedList constructor.
     * @param null $Node
     * @param null $name
     */
    public function __construct($Node = null, $name = null)
    {
        $this->header = new Node ($Node, null);
    }

    public function count()
    {
        $length = 0;
        $currentNode = $this->header;
        while ($currentNode->getNext() != null) {
            $length++;
            $currentNode = $currentNode->getNext();
        }
        return $length;
    }

    /**
     * 添加节点
     *
     * @param Node $node
     */
    public function addNode(Node $node)
    {
        $currentNode = $this->header;
        while ($currentNode->getNext() != null) {
            $currentNode = $currentNode->getNext();
        }
        $currentNode->setNext($node);
    }

    /**
     * 在$location位置添加节点
     *
     * @param Node $node
     * @param $location
     * @return bool
     */
    public function insertNode(Node $node, $location)
    {
        $length = $this->count();
        if ($location > $length) {
            return false;
        }
        $i = 0;
        $currentNode = $this->header;
        while ($i == $length) {
            $currentNode = $currentNode->getNext();
            $i++;
        }
        $node->setNext($currentNode->getNext());
        $currentNode->setNext($node);
    }

    /**
     * 删除节点
     *
     * @param $location
     * @return bool
     */
    public function delNode($location)
    {
        $length = $this->count();
        if ($location > $length) {
            return false;
        }
        $i = 0;
        $currentNode = $this->header;
        while ($i == $length - 1) {
            $currentNode = $currentNode->getNext();
            $i++;
        }
        $currentNode->setNext($currentNode->getNext()->getNext());
    }

    /**
     * 清空列表
     */
    public function clear()
    {
        $this->header = null;
    }
}
