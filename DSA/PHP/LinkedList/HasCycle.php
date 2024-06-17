<?php
//If there is no cycle, first pointer will reach to the end of linked list
//If there is cycle, first pointer will meet somewhere with slow pointer.

class ListNode {
    public $val;
    public $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution {

    public function hasCycle($head) {
        $slow = $fast = $head;

        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
                return true;
            }
        }
        return false;
    }

    public function detectNodePositionInCycle($head) {
        if ($head === null || $head->next === null) {
            return -1;
        }

        $slow = $fast = $head;
        //Floyd's Tortoise and Hare algorithm to detect a cycle
        while ($fast !== null || $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
                break;
            }
        }

        if ($slow === null || $fast === null) {
            return -1;
        }

        //Reset one pointer to head and return position of cyclic node.
        $slow = $head;
        $pos = 0;
        while ($slow !== $fast) {
            $slow = $slow->next;
            $fast = $fast->next;
            $pos++;
        }

        echo $pos;
    }
}

$head = new ListNode(3);
$second = new ListNode(2);
$third = new ListNode(0);
$fourth = new ListNode(-4);
$fifth = new ListNode(6);

$head->next = $second;
$second->next = $third;
$third->next = $fourth;
$fourth->next = $fifth;
$fifth->next = $fourth;

$solution = new Solution();

echo $solution->detectNodePositionInCycle($head);

// if ($solution->hasCycle($head)) {
//     echo "Cycle detected";
// } else {
//     "No cycle detected";
// }