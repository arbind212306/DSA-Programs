<?php

class Node {
    private $data;
    private $next;

    public function __construct($data = null, $next = null)
    {
        $this->data = $data;
        $this->next = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function getNext() {
        return $this->next;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setNext($next = null) {
        $this->next = $next;
    }
}

class MySingleLinkedList {
    private $head;

    public function __construct($head)
    {
        $this->head = null;
    }

    public function get($index) {
        $currentNode = $this->head;
        $i = 0;

        while ($currentNode->getNext() !== null) {
            if ($i === $index) {
                return $currentNode->getData();
            }
            $i++;
        }
        return -1; //Return -1 if the Index is Invalid
    }

    public function addAtHead($val) {
        $newNode = new Node($val, $this->head);
        $this->head = $newNode;
    }

    public function addAtTail($val) {
        $newNode = new Node($val);
        
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            while ($currentNode->getNext() !== null) {
                $currentNode = $currentNode->getNext();
            }
            $currentNode->setNext($newNode);
        }
    }

    public function addAtIndex($index, $val) {
        if ($index === 0) {
            $this->addAtHead($val);
            return;
        }

        $currentNode = $this->head;
        $i = 0;
        while ($currentNode->getNext() !== null) {
            if ($i === $index - 1) {
                $newNode = new Node($val, $currentNode->getNext());
                $currentNode->setNext($newNode);
                return;
            }
            $currentNode = $currentNode->getNext();
            $i++;
        }
    }

    public function deleteAtIndex($index) {
        if ($this->head === null) {
            return;
        }

        if ($index === 0) {
            $this->head = $this->head->getNext();
            return;
        }

        $currentNode = $this->head;
        $i = 0;
        while ($currentNode->getNext() !== null) {
            if ($i === $index - 1) {
                $currentNode->setNext($currentNode->getNext()->getNext());
            }
            $currentNode = $currentNode->getNext();
            $i++;
        }
    }
}