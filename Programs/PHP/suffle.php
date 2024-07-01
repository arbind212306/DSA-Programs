<?php

//Fisher-Yates suffle algorithim - O(n)
function suffle(array $arr): array {
    $length = count($arr);
    
    for ($i=$length-1; $i>=0; $i--) {
        $j = rand(0, $i);
        $temp = $arr[$j];
        $arr[$j] = $arr[$i];
        $arr[$i] = $temp;
    }
    return $arr;
}

$arr = [23,1,5,6,7];
$suffle = suffle($arr);
print_r($suffle);