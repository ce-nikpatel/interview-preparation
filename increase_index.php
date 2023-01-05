<?php

/* One Away: There are three types of edits that can be performed on strings: insert a character,
remove a character, or replace a character. Given two strings, write a function to check if they are
one edit (or zero edits) away. */

$str1="bab";
$str2="ba";

echo $response = checkString($str1,$str2);

function checkString($str1,$str2){
	$response = (abs(strlen($str1)-strlen($str2))) > 1 ? "FALSE" : "TRUE";
	$length = (strlen($str1) > strlen($str2))?strlen($str1):strlen($str2);
	if($response == "FALSE"){
		return $response;
	}
	$operation = 0;
	$j=0;
	for($i=0;$i<$length;$i++){
		if(($str1[$i] !== $str2[$j] && strlen($str1) !== strlen($str2)) || !isset($str1[$i]) || !isset($str2[$j])){
			$operation++;
		}else if(($str1[$i] !== $str2[$j]) && (strlen($str1) === strlen($str2))){
			$operation++;
			$j++;
		}else{
			$j++;
		}
		
		if($operation > 1){
			$response = "FALSE";
			break;
		}
	}
	return $response;
}

/*String Compression: Implement a method to perform basic string compression using the counts
of repeated characters. For example, the string aabcccccaaa would become a2blc5a3. If the
"compressed" string would not become smaller than the original string, your method should return
the original string. You can assume the string has only uppercase and lowercase letters (a - z).*/

$str1="woooooooble";

echo $response = checkStringCompress($str1);

function checkStringCompress($str1){
	$length = strlen($str1);
	$response = ($length == 1) ? "TRUE" : "FALSE";
	if($response == "TRUE"){
		$response = $str1;
		return $response;
	}
	$count = 1;
	$temp = $str1[0];
	$newStr = null;

	for($i=1;$i<$length;$i++){
		$stringChar = $str1[$i];
		if($temp == $stringChar){
			$count++;
		}else{
			$newStr .= $temp.$count;
			$count = 1;
			$temp = $stringChar;
		}
		if($i == ($length-1)){
			$newStr .= $temp.$count;
		}
	}
	$response = $newStr;
	if($length < strlen($newStr)){
		$response = $str1;
	}
	return $response;
}

$str1="aaaabbbcccdddeee";

echo $response = checkCompress($str1);

function checkCompress($string){
	$length = strlen($string);
	$response = ($length == 1) ? "TRUE" : "FALSE";
	if($response == "TRUE"){
		$response = $string;
		return $response;
	}
	$count = 1;
	$last = $string[0];
	$compressed = null;

	for($i=1;$i<$length;$i++){
		if($last == $string[$i]){
			$count++;
		}else{
			$compressed .= $last.$count;
			$count = 1;
			$last = $string[$i];
		}
	}
	$compressed .= $last.$count;
	return strlen($compressed) < strlen($string) ? $compressed : $string;
}