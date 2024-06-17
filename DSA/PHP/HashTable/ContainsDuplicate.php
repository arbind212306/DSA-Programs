<?php
//Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.
class Solution {
    
    protected $values = [];

    public function add($key) {
        $this->values[$key] = true;
    }

    public function contains($key) {
        return $this->values[$key] ?? false;
    }

    public function containsDuplicate ($arr) {
        foreach ($arr as $key) {
            if ($this->contains($key)) {
                return true;
            }
            $this->add($key);
        }
        return false;
    }
}