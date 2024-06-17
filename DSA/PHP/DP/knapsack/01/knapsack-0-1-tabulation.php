<?php
/**
 * Time complexity: O(n*w)
 * Space complexity: O(n*m)
 */
function knapsack ($W, $n, $weights, $profits) {
    $dp = array_fill(0, $n+1, array_fill(0, $W+1, 0));
    
    for ($i=0; $i<=$n; $i++) {
        for ($j=0; $j<=$W; $j++) {
            if ($i === 0 || $j === 0) {
                $dp[$i][$j] = 0;
            } else if ($weights[$i-1] <= $j) {
                $dp[$i][$j] = max($dp[$i-1][$j], $dp[$i-1][$j-$weights[$i-1]]+$profits[$i-1]);
            } else {
                $dp[$i][$j] = $dp[$i-1][$j];
            }

        }
    }
    print_r($dp);
    return $dp[$n][$W];
}

//Driver code
$profit = array(1,2,3);
$weight = array(4,5,1);
$capacity = 4;
$n = 3;

echo knapsack($capacity, $n, $weight, $profit);