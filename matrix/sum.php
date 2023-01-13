<?php

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

print_r(rotateMatrix($matrix));

function rotateMatrix($matrix){
	$n = count($matrix);
	$sum = 0;
	for($i=0;$i<$n;$i++){
		for($j=0;$j<$n;$j++){
			$sum += $matrix[$i][$j];
		}
	}
	return $sum;
}

// get row sum

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

print_r(rowArraySum($matrix));

function rowArraySum($matrix){
	$n = count($matrix);
	$rowArray = [];
	for($i=0;$i<$n;$i++){
		$sum = 0;
		for($j=0;$j<$n;$j++){
			$sum += $matrix[$i][$j];
		}
		$rowArray[] = $sum;
	}
	return $rowArray;
}

// get column sum 

$matrix = [
  [1, 2, 3, 4],
  [4, 5, 6, 4],
  [7, 8, 9, 4]
];

print_r(columnArraySum($matrix));

function columnArraySum($matrix){
	$r = count($matrix);
	$c = count($matrix[0]);
	
	$columnArray = [];
	for($i=0;$i<$c;$i++){
		$sum = 0;
		for($j=0;$j<$r;$j++){
			$sum += $matrix[$j][$i];
		}
		$columnArray[] = $sum;
	}
	return $columnArray;
}