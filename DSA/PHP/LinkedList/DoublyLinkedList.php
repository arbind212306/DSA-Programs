<?php

class Node {
    private $val;
    private $next = null;
    private $prev = null;

    public function __construct($val)
    {
        $this->val = $val;
    }

    //Get current element
    public function current() {
        return $this->val;
    }

    //Check node is valid
    public function valid() {
        return $this->prev || $this->next ? true : false;
    }

    //Get previous node
    public function prev() {
        return $this->prev;
    }

    //Get next node
    public function next(){
        return $this->next;
    }

    //Set next
    public function setNext($next = null) {
        $this->next = $next;
    }

    //Set prev
    public function setPrev($prev = null) {
        $this->prev = $prev;
    }
}

class DoublyLinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    //Push an element at the end of the doubly linked list
    public function push($val) {
        $newNode = new Node($val);
        //check head
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            //Iterate till $current->next is null
            while ($currentNode->next() !== null) {
                $currentNode = $currentNode->next();
            }
            $newNode->setPrev($currentNode);
            $currentNode->setNext($newNode);
        }
        // var_dump($this->head);
    }

    public function pop() {
        if ($this->head) {
            $currentNode = $this->head;
            while($currentNode->next() !== null) {
                $currentNode = $currentNode->next();
            }
            $previousNode = $currentNode->prev();
            $previousNode->setNext();
            $this->head = $previousNode;
            // var_dump($previousNode);
        }
    }

    //Rewind iterator back to the start
    public function rewind() {
        if ($this->head) {
            $currentNode = $this->head;
            while($currentNode->next() !== null) {
                echo $currentNode->current() . "\n";
                $currentNode = $currentNode->next();
            }
            echo $currentNode->current() . "\n";
        }
    }

    //Add element at head
    public function unshift($val) {
        $newNode = new Node($val);
        //check head
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $newNode->setNext($this->head);
            $this->head = $newNode;
        }
    }


}

$ddl = new DoublyLinkedList();
$ddl->push(3);
$ddl->push(4);
$ddl->unshift(5);
$ddl->unshift(7);
$ddl->rewind();
$ddl->pop();
echo '============='."\n";
$ddl->rewind();
// var_dump($ddl);