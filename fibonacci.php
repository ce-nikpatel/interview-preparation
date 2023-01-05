<?php

/* fibonacci */

// $a = 0;
// $b = 1;

// for($i=0;$i<=10;$i++){
//   $c = $a+$b;
//   echo $c."\n";
//   $a = $b;
//   $b = $c;
// }

/* missing number */

// $arr = [1, 2, 3, 4, 5, 6, 8];
// $count = count($arr);
// $total = (($count+1)*($count+2))/2;

// $sum = 0;

// for($i=0;$i<$count;$i++){
//     $sum += $arr[$i];
// }

// $missingNum = $total-$sum;
// echo $missingNum;

/* duplicate count in array */
// $arr = [1, 1, 2, 2, 3, 3, 3];

// $res = [];
// $result = [];

// foreach($arr as $key=>$val){
//     if(!isset($res[$val])){
//         $res[$val] = 0;
//     }
//     $res[$val]++;

//     if($res[$val] > 1){
//        if(!in_array($val, $result)){
//             $result[] = $val;
//         }
//     }
// }
// print_r($result);

/* Find the largest and smallest number */

// $arr = [-20, 34, 21, -87, -92, 2147483647];

// $minNum = 0;
// $maxNum = 0;

// for($i=0;$i<count($arr);$i++){
//     if($arr[$i] < $minNum){
//         $minNum = $arr[$i];
//     }
//     if($arr[$i] > $maxNum){
//         $maxNum = $arr[$i];
//     }
// }
// echo "largest number is ".$maxNum."<br/>";
// echo "smallest number is ".$minNum;


/*  Find all pairs of an integer array whose sum is equal to a given number */
$arr = [2, 4, 3, 5, 6, -2, 4, 7, 8, 9];
$sum = 7;

for($i=0;$i<count($arr);$i++){
    
    $first = $arr[$i];
    for($j=$i+1;$j<count($arr);$j++){
        $second = $arr[$j];
        if(($first+$second) == $sum){
            echo "array pair is (".$first.",".$second.") <br/>";
        }
    }
}
?>  