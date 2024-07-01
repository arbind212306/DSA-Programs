<?php

/**
 * Rotate array to right by k steps
 * Input: nums = [1,2,3,4,5,6,7], k = 3
 * Output: [5,6,7,1,2,3,4]
 * Explanation:
 * rotate 1 steps to the right: [7,1,2,3,4,5,6]
 * rotate 2 steps to the right: [6,7,1,2,3,4,5]
 * rotate 3 steps to the right: [5,6,7,1,2,3,4]
 */

function rotate (array $arr, $steps = 1): array {
    $length = count($arr);
    //Main loop, no of steps to rotate
    for ($k=0; $k<$steps; $k++) {
        for ($i=0; $i<$length; $i++) {
            if ($i+1 < $length) {
                $temp = $arr[$i+1];
                $arr[$i+1] =  $arr[0];
                $arr[0] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [1,2,3,4,5,6,7];
$steps = 3;
$rotate = rotate($arr, $steps);
print_r($rotate);