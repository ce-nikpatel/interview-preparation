<?php

/* 1 - find the destination */

$tickets = [['SFO','LAX'],['HKG','HAM'],['LAX','JFK'],['DXB','HKG'],['JFK','LHR'],['CDG','DXB'],['LHR','CDG']];

$source = 'SFO';

$sourchDestinationMap = [];

foreach($tickets as $value){
	$sourchDestinationMap[$value[0]] = $value[1];
}

$destination = null;
for($i=0;$i<count($sourchDestinationMap);$i++){
	if(isset($sourchDestinationMap[$source])){
		$destination = $sourchDestinationMap[$source];
		$source = $sourchDestinationMap[$source];
	}
}

echo $destination;

/* 2 - Is Unique: Implement an algorithm to determine if a string has all unique characters. What if you
cannot use additional data structures?  */
$strings = "abcdeghtuiop";
$res = [];
$response = "TRUE";
for($i=0;$i<strlen($strings);$i++){
	if(!isset($res[$strings[$i]])){
 		$res[$strings[$i]] = 0;
 	}	
 $res[$strings[$i]]++;
 if($res[$strings[$i]] > 1){
 	$response = "FALSE";
 	break;
 } 
}
print_r($response);

/* 3 - Check Permutation: Given two strings, write a method to decide if one is a permutation of the
other. */

$str1 = "strr";
$str2 = "trst";
echo $response = checkIsPerumtedString($str1, $str2);

function checkIsPerumtedString($str1, $str2) {

	$response = "YES";
	if(strlen($str1) !== strlen($str2)){
		return "NO";
	}
	
	$newStr1 = [];
	$newStr2 = [];
	
	for($i=0;$i<strlen($str1);$i++){
		if(!isset($newStr1[$str1[$i]])){
			$newStr1[$str1[$i]] = 0;
		}
		$newStr1[$str1[$i]]++;
	}
	
	for($i=0;$i<strlen($str2);$i++){
		if(!isset($newStr2[$str2[$i]])){
			$newStr2[$str2[$i]] = 0;
		}
		$newStr2[$str2[$i]]++;
	}
	
	foreach($newStr1 as $key=>$val){
		if($newStr1[$key] !== $newStr2[$key]){
			$response = "NO";
			break;
		}
	}
	return $response;		
}

/* 4 - Write a method to replace all spaces in a string with '%20'. You may assume that the string
has sufficient space at the end to hold the additional characters, and that you are given the "true" */

$str1 = "hello  world";
echo $response = replaceStringSpace($str1);

function replaceStringSpace($str1) {

	$newStr1 = [];
	$newString = null;
	
	for($i=0;$i<strlen($str1);$i++){
		if($str1[$i] === ' '){
			$newString .= '%20';
		}else{
			$newString .= $str1[$i];	
		}
	}
	return $newString;	
}

/* 5 - Given a string, write a function to check if it is a permutation of a palindrome.
A palindrome is a word or phrase that is the same forwards and backwards. A permutation
is a rearrangement of letters. The palindrome does not need to be limited to just dictionary words.*/

$str1 = "aba";
$str1 = str_replace(' ', '', $str1);

echo $response = checkIsPalindrome($str1);

function checkIsPalindrome($str1) {

	$newStr1 = [];
	$newStr2 = [];
	$response = "YES";

	for ($i = 0; $i < strlen($str1); $i++) {
		if (!isset($newStr1[$str1[$i]])) {
			$newStr1[$str1[$i]] = 0;
		}
		$newStr1[$str1[$i]]++;
	}

	if ((strlen($str1) % 2) == 0) {
		foreach ($newStr1 as $val) {
			if (($val%2) != 0) {
				$response = "NO";
				break;
			}
		}
	} else {
		$count = 0;
		foreach ($newStr1 as $val) {
			if (($val%2) != 0) {
				$count++;
			}
			if ($count > 1) {
				$response = "NO";
				break;
			}
		}
	}
	return $response;
}