<?php

// selection sort
$arr = array("GeeksforGeeks", "Practice.GeeksforGeeks", "GeeksQuiz");
$len = count($arr);
selection_sort($arr, $len);

function selection_sort(&$arr,$n){

    for($i=0;$i<$n;$i++){
        $min = $i;
        $min_str = $arr[$i];

        for($j=$i+1;$j<$n;$j++){    
            if($arr[$j] < $min_str){
                $min = $j;
                $min_str = $arr[$j];
            }
        }
        
        if($min != $i){
            $temp = $arr[$min];
            $arr[$min] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}

echo "<pre>";
print_r($arr); 

?>