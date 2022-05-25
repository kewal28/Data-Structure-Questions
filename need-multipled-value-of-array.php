// Question
// Need to print multiple value for all value except currect one.
// For example Input: [1,2,3,4];
// Result Should be :[24,12,8,6];

<?php

$array = [1,2,3,4];

for($k =count($array)-1; $k>=0; $k--) {
    if($k==count($array)-1){
        $b[$k] = 1;
    } else {
        $b[$k] = $array[$k + 1]*$b[$k + 1];
    }

    
}

for($i =0; $i<count($array); $i++) {
    if($i==0){
        $a[$i] = 1;
    } else {
        $a[$i] = $array[$i - 1]*$a[$i-1];
    }
    $c[$i] = $a[$i] * $b[$i];
}


echo "<pre>";
print_r($c);
