<?php
$num = [2, 9, 1, 8, 7, 3, 5];

var_dump(comb_sort($num));

function comb_sort($array){
    $count = count($array);
    $gap = $count;
    $swapped = true;



    while($gap !== 1 || $swapped){

        $gap = floor($gap / 1.3);

        if($gap < 1){
            $gap = 1;
        }

        $swapped = false;

        for($i = 0; $i < $count - $gap; $i++){
            if($array[$i] > $array[$i + 1]){
                $tmp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $tmp;
                $swapped = true;
            }
        }
    }

    return $array;
}