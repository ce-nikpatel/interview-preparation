<!-- https://leetcode.com/discuss/interview-question/304617/Yelp-or-OA-2019-or-Business-Open-Hours-Ratio
Business Hours -->


<?php

$queryStringArray = explode("-",'0-24');
$openHours = ['0-2','0-3','20-24'];

$openHoursSorted = [];
$m = sizeof($openHours);
for($i=0; $i < $m; $i++){
    $currentHour = explode('-',$openHours[$i]);
    if(!isset($openHoursSorted[$currentHour[0]]) || $openHoursSorted[$currentHour[0]] < $currentHour[1] ){
        $openHoursSorted[$currentHour[0]] = $currentHour[1];
    }
}

$shoppingHour = 0;
$currentSlot = -1;
for($j=0;$j<=24;$j++){

    if(isset($openHoursSorted[$j]) && ($currentSlot < 0 || $openHoursSorted[$currentSlot] < $openHoursSorted[$j])){
        $currentSlot = $j;
    }

    if($queryStringArray[0] >= $currentSlot && $queryStringArray[1] <= $openHoursSorted[$currentSlot]){
        $shoppingHour++;
    }

}

$result = 0;
if($queryStringArray[1] - $queryStringArray[0] > 0){
    $result = $shoppingHour/($queryStringArray[1] - $queryStringArray[0]);
}

echo "result === ".$result;