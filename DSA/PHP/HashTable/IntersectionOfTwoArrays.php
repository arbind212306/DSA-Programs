<?php
/**
 * Given two integer arrays nums1 and nums2, return an array of their intersection. 
 * Each element in the result must be unique and you may return the result in any order.
 */

class Solution {
    private $values = [];
    private $intersectedValues = [];

    private function add (int $key): void {
        $this->values[$key] = isset($this->values[$key]) ? $this->values[$key] + 1 : 1;
    }

    private function get (int $key) {
        return $this->values[$key] ?? false;
    }

    public function intersect (array $nums1, array $nums2) {
        foreach ($nums1 as $num1) {
            $this->add($num1);
        }

        foreach ($nums2 as $num2) {
            if ($this->get($num2) && !(isset($this->intersectedValues[$num2]))) {
                $this->intersectedValues[$num2] = $num2;
            }
        }

        return $this->intersectedValues;
    }
}

$nums1 = [4,9,5];
$nums2 = [9,4,9,8,4];

$arr = new Solution();
print_r($arr->intersect($nums1, $nums2));