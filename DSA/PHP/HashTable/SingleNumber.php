<?php
//Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
//You must implement a solution with a linear runtime complexity and use only constant extra space.

class Solution {
    protected $values = [];
    private $one = 1;

    public function add (int $key):void {
        $this->values[$key] = isset($this->values[$key]) ? $this->values[$key] + 1 : 1;
    }

    public function singleNumber (array $nums) {
        foreach ($nums as $num) {
            $this->add($num);
        }
        return array_flip($this->values)[$this->one];
    }
}

$solution = new Solution();
echo $solution->singleNumber([4,1,2,1,2]);
