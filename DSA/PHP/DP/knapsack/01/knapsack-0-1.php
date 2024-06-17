<?php
//0-1-Knapsack problem
/**
 * Given N items where each item has some weight and profit associated with it 
 * and also given a bag with capacity W, [i.e., the bag can hold at most W weight in it]. 
 * The task is to put the items into the bag such that the sum of profits associated with 
 * them is the maximum possible. 
 * 
 * Note: The constraint here is we can either put an item completely into the bag or cannot 
 * put it at all [It is not possible to put a part of an item into the bag].
 * 
 * Input: N = 3, W = 4, profit[] = {1, 2, 3}, weight[] = {4, 5, 1} Output: 3
 * 
 * Time Complexity: O(2^N)
 * Space Complexity: O(N)
 */

function knapsack ($capacity, $n, $weights, $profit) {
    //Base Case
    if ($capacity === 0 || $n === 0) {
        return 0;
    }

    if ($weights[$n-1] > $capacity) {
        return knapsack($capacity, $n-1, $weights, $profit);
    } else {
        return max(
            $profit[$n - 1] + knapsack($capacity - $weights[$n - 1], $n - 1, $weights, $profit),
            knapsack($capacity, $n-1, $weights, $profit));
    }
}

//Driver code
$profit = array(1,2,3);
$weight = array(4,5,1);
$capacity = 4;
$n = 3;

echo knapsack($capacity, $n, $weight, $profit);