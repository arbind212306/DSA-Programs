<?php

/**
 * Time complexity - O(N*W)
 * Space complexity - O(N*W) + O(N). The use of a 2D array data structure for storing intermediate states and O(N) auxiliary stack space(ASS) has been used for recursion stack
 */

function knapsack ($W, $n, $weights, $profits, &$memo = array()) {
    //Base Case
    if ($W === 0 || $n === 0) {
        return 0;
    }

    //check if result is already computed
    if (isset($memo[$W][$n])) {
        return $memo[$W][$n];
    }

    //If the weight of nth item is more than the capacity of bag, It cannot be included
    if ($weights[$n-1] > $W) {
        $result = knapsack($W, $n-1, $weights, $profits, $memo);
    } else {
        //Compute the maximum of including or not including the nth item.
        $result = max(
            $profits[$n-1] + knapsack($W-$weights[$n-1], $n-1, $weights, $profits, $memo),
            knapsack($W, $n-1, $weights, $profits, $memo)
        );
    }

    //Store the result in memoization table
    $memo[$W][$n] = $result;
    return $result;
}


//Driver code
$profit = array(60, 100, 120);
$weights = array(10, 20, 30);
$W = 50;
$n = 3;

echo knapsack($W, $n, $weights, $profit);