<?php

/*
Given a boolean 2D array of n x m dimensions where each row is sorted. Find the 0-based index of the first row that has the maximum number of 1's.
*/

// function to find the first row with the maximum number of 1s
$matrix = [[0, 0, 0, 1], [1, 1, 0, 0], [0, 0, 0, 0], [0, 1, 1, 1]];
$firstRowWithMaxOnes = findFirstRowWithMaxOnes($matrix, 4, 4);
echo $firstRowWithMaxOnes; // should output 1

// function to find the first row with the maximum number of 1s
function findFirstRowWithMaxOnes($matrix, $n, $m) {
    $maxOne = $maxCount = 0;
	$maxOneRow = 0;
    for($i=0;$i<$n;$i++){
    	$maxCount = 0;
        for($j=0;$j<$m;$j++){
            if($matrix[$i][$j] == 1){
                $maxCount++;
            }
        }
        if($maxCount > $maxOne ){
            $maxOne = $maxCount;
            $maxOneRow = $i;
        }
    }
    return $maxOneRow;
}
