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
     * @param Node $Node
     */
    public function __construct(Node $Node)
    {
        $this->header = $Node;
    }

    /**
     * 统计链表长度
     *
     * @return int
     */
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

    /**
     * 正序遍历
     */
    public function printLink()
    {
        $currentNode = $this->header;
        while ($currentNode->getData() != null) {
            echo $currentNode->getData();
        }
    }

    /**
     * 倒序遍历
     *
     * @param Node $header
     */
    public function printLinkRev(Node $header)
    {
        if ($header->getData() != null) {
            $this->printLinkRev($header->getNext());
            echo $header->getData();
        }
    }

    /**
     * 反转链表
     *
     * @return Node|null
     */
    public function reserveLink()
    {
        $current = $this->header;
        if ($current === null) {
            return null;
        }
        $result = $pre = null;
        while ($current != null) {
            $next = $current->getNext();
            if ($next != null) {
                $result = $current;
            }
            $current->setNext($pre);
            $pre = $current;
            $current = $next;
        }
        $this->header = $result;
        return $result;
    }
}
