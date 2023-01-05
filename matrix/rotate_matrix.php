<?php

/*

Given a square matrix[][] of size N x N. The task is to rotate it by 90 degrees in an anti-clockwise direction without using any extra space.

[ 
    [ 1, 2, 3 ] 
    [ 4, 5, 6 ] 
    [ 7, 8, 9 ] 
]

transpose the matrix

for i (0 -> length(a)) // rows
for j (0 -> length(a)) // columns
a[i][j] = a[j][i]

[ 
    [ 1, 4, 7 ] 
    [ 2, 5, 8 ] 
    [ 3, 6, 9 ] 
]

reverse the matrix
for i in range (n/2) // rows
for j in range (n) // columns
a[j][i], a[j][n-1-i] = a[j][n-1-i],a[j][i]

[ 
    [ 7, 4, 1 ] 
    [ 8, 5, 2 ] 
    [ 9, 6, 3 ] 
]
*/

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

print_r(rotateMatrix($matrix));

function rotateMatrix($matrix){
	$n = count($matrix);
	
	// Transpose the matrix
	for($i=0;$i<$n;$i++){
		for($j=$i;$j<$n;$j++){
			[$matrix[$i][$j],$matrix[$j][$i]] = [$matrix[$j][$i],$matrix[$i][$j]];
		}
	}
	
	// Reverse the rows
	for ($i = 0; $i < $n; $i++) {
		$matrix[$i] = array_reverse($matrix[$i]);
		// for($j=$i;$j<$n;$j++){
			//[$matrix[$j][$i],$matrix[$j][$n-1-$i]] = [$matrix[$j][$n-1-$i],$matrix[$j][$i]];
		// }
	}

	return $matrix;
}
