<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2019/3/20
 * Time: 16:53
 */

class TreeNode
{
    var $val;
    var $left = NULL;
    var $right = NULL;

    function __construct($val)
    {
        $this->val = $val;
    }
}

function reConstructBinaryTree($pre, $vin)
{
    if (count($pre) == 0 || count($vin) === null) {
        return null;
    }
    $root = $pre[0];
    $rootIndex = array_search($root, $vin);
    $vinLeftTree = array_slice($vin, 0, $rootIndex);
    $vinRightTree = array_slice($vin, $rootIndex + 1);

    $preLeftTree = array_slice($pre, 1, count($vinLeftTree));
    $preRightTree = array_slice($pre, count($vinLeftTree) + 1, count($vinRightTree));

    $rootNode = new TreeNode($root);
    $rootNode->left = reConstructBinaryTree($preLeftTree, $vinLeftTree);
    $rootNode->right = reConstructBinaryTree($preRightTree, $vinRightTree);

    return $rootNode;
}

$a = [1, 2, 4, 7, 3, 5, 6, 8];
$b = [4, 7, 2, 1, 5, 3, 8, 6];
var_dump(reConstructBinaryTree($a, $b));
