<?php

class Node {
    private $data;
    private $next;

    public function setData ($data): void {
        $this->data = $data;
    }

    public function getData () {
        return $this->data;
    }

    public function setNext ($next = null): void {
        $this->next = $next;
    }

    public function getNext () {
        return $this->next;
    }
}

class MyLinkedList {
    private $head = null;

    public function get ($index) {
        $i = 0;
        $temp = $this->head;
        while ($temp->getNext() !== null) {
            if ($i === $index) {
                return $temp->getData();
            }
            $i++;
            $temp = $temp->getNext();
        }

        return 'No Data Found!!';
    }

    public function addAtHead ($val) {
        $addAtHead = new Node();
        $addAtHead->setData($val);
        $addAtHead->setNext();
        if ($this->head == null) {
            //Set first node
            $this->head = $addAtHead;
        } else {
            //Linking with next node
            $addAtHead->setNext($this->head);
            $this->head = $addAtHead;
        }
    }

    public function addAtTail ($val) {
        $addAtTail = new Node();
        $addAtTail->setData($val);
        $addAtTail->setNext();

        $temp = $this->head;
        //Traverse till next node is not null
        while ($temp->getNext() !== null) {
            //make temp dirty
            $temp = $temp->getNext();
        }
        //Linking with current node
        $temp->setNext($addAtTail);
    }

    public function addAtIndex ($index,$val) {
        $temp = $this->head;
        $prev = (object) null;
        $i = 0;

        while ($temp->getNext() !== null) {
            if ($i === $index) {
                $addAtIndex = new Node();
                $addAtIndex->setData($val);
                $addAtIndex->setNext($temp);
                //Linking with previous node
                $prev->setNext($addAtIndex);
                return;
            }

            //set previous data
            $prev = $temp;
            //make temp dirty
            $temp = $temp->getNext();
            $i++;
        }
    }

    public function deleteAtIndex ($index) {
        $temp = $this->head;
        $prev = (object) null ;
        $i=0;
        while ($temp->getNext() !== null) {
            if ($i === $index) {
                $prev->setNext($temp->getNext());
                unset($temp);
                return;
            }
            $prev = $temp;
            $temp = $temp->getNext();
            $i++;
        }
    }

    public function printLinkedList() {
        $temp = $this->head;
        while ($temp->getNext() !== null) {
            echo $temp->getData() .', ';
            $temp = $temp->getNext();
        }
        echo $temp->getData() ?? 'No Data found';
    }
}

$myLinkedList = new MyLinkedList();
$myLinkedList->addAtHead(10);
$myLinkedList->addAtHead(20);
$myLinkedList->addAtHead(30);

$myLinkedList->addAtTail(40);
$myLinkedList->addAtTail(50);

$myLinkedList->printLinkedList();
echo "\n";
echo $myLinkedList->get(1);
echo "\n";
$myLinkedList->addAtIndex(1,60);

$myLinkedList->printLinkedList();
echo "\n";

$myLinkedList->addAtIndex(4,60);
echo "\n";
$myLinkedList->printLinkedList();
echo "\n";

$myLinkedList->deleteAtIndex(2);
$myLinkedList->printLinkedList();
echo "\n";