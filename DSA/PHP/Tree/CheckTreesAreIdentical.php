<?php

/**
 * check two trees are identical
 *       1          1
 *      / \        / \
 *     2   3      2  3
 * 
 */

 class Node {
    private $value;
    private $left = null;
    private $right = null;

    public function __construct($value = null)
    {
        $this->value = $value;
    }

    public function currentValue() {
        return $this->value;
    }

    public function left() {
       return $this->left;
    }

    public function setLeft($val) {
        $this->left = $val;
    }

    public function right() {
        return $this->right;
    }

    public function setRight($val) {
        $this->right = $val;
    }
 }

 class BST {
    private $root;

    public function __construct() {
        $this->root = null;
    }
    
    public function insert($val) {
        $newNode = new Node($val);
        if ($this->root === null) {
            $this->root = $newNode;
        }

        $temp = $this->root;
        while(true) {
            if ($temp->currentValue() === $newNode->currentValue()) return;

            if ($newNode->currentValue() < $temp->currentValue()) {
                if ($temp->left() === null) {
                    $temp->setLeft($newNode);
                    return;
                }
                $temp = $temp->left();
            } else {
                if ($temp->right() === null) {
                    $temp->setRight($newNode);
                    return;
                }
                $temp = $temp->right();
            }
        }
    }


    public function isIdenticalTree($tree1, $tree2) {
        //both are empty
        if ($tree1 === null && $tree2 === null) {
            return true;
        }

        //one is empty
        if ($tree1 === null || $tree2 === null) {
            return false;
        }

        //both node are not same
        if ($tree1->val !== $tree2->val) {
            return false;
        }

        //both are not empty, compare them
        if ($tree1 && $tree2) {
            return  $this->isIdenticalTree($tree1->left, $tree2->left) && $this->isIdenticalTree($tree1->right, $tree2->right);
        }

        return false;
    }
 }


 $bst1 = new BST();
 $bst1->insert(1);
 $bst1->insert(2);
//  $bst1->insert(76);
//  $bst1->insert(18);
//  $bst1->insert(27);
//  $bst1->insert(52);
//  $bst1->insert(82);

 $bst2 = new BST();
 $bst2->insert(1);
 $bst2->insert(null);
 $bst2->insert(2);
//  $bst2->insert(18);
//  $bst2->insert(27);
//  $bst2->insert(52);
//  $bst2->insert(82);

 var_dump($bst1->isIdenticalTree($bst1, $bst2));
