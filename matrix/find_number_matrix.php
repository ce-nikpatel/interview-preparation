<?php

$matrix = [[3, 30, 38], [44, 52, 54], [57, 60, 69]];
$firstRowWithMaxOnes = findNumber($matrix, 62, 3, 3);
echo $firstRowWithMaxOnes; // should output 1

// function to find the first row with the maximum number of 1s
function findNumber($matrix,$number, $n, $m) {
    $count = 0;
	for($i=0;$i<$n;$i++){
    	for($j=0;$j<$m;$j++){
            if($matrix[$i][$j] == $number){
                $count++;
            }
        }
    }
   return $count;
}
