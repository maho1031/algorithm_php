<?php

$nums = [9, 5, 3, 1, 7, 8];
var_dump(insertion_sort($nums));

function insertion_sort($array){
    $count = count($array);

    for($i = 1; $i <= $count - 1; $i++){
        $j = $i;

        // 1つ前の値が今の値より大きかったら交換
        while($j >= 1 && $array[$j - 1] > $array[$j]){
            $tmp = $array[$j];
            $array[$j] = $array[$j - 1];
            $array[$j - 1] = $tmp;

            $j--;
        }
    }
    return $array;
}