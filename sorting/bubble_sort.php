<?php
$arr = [4, 7, 3, 2];

function bubbleSort(&$arr){
    $cnt = count($arr);
    for($i=0;$i<$cnt;$i++){
        $swapped = false;
        for($j=0;$j<$cnt-1;$j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
                $swapped = true;
            }
        }

        if($swapped == false){
            break;
        }
    }
}

bubbleSort($arr);
echo "<pre>";
print_r($arr);
?>