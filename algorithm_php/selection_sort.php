<?php

$num = [1, 5, 2, 8, 7, 3];
var_dump(selection_sort($num));

function selection_sort($array){
    $count = count($array);

    for($i = 0; $i <= $count; $i++){
        $min_idx = $i;

        for($j =  $i + 1; $j < $count; $j++){
            if($array[$min_idx] > $array[$j]){
                $min_idx = $j;
                // var_dump($i);
                $tmp = $array[$i];
                $array[$i] = $array[$min_idx];
                $array[$min_idx] = $tmp;
            }
        }
    }
    return $array;
}