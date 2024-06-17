<?php

class Node {
    public $data;
    public $next;
}

class LinkedList {
    public $head;

    public function __construct()
    {
        $this->head = null;
    }
}

//create an empty linked list
$myList = new LinkedList();

//add first node
$first = new Node();
$first->data = 10;
$first->next = null;
//linking with head
$myList->head = $first;

//add second node
$second = new Node();
$second->data = 20;
$second->next = null;
//linking with first node
$first->next = $second;

//Add third node
$third = new Node();
$third->data = 30;
$third->next = null;
//linking with second node
$second->next = $third;

var_dump($myList);