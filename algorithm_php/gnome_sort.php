<?php

$nums = [2, 1, 5, 8, 7, 3];
var_dump(gnome_sort($nums));


function gnome_sort($array){
    $count = count($array);
    $index = 0;

    while($index < $count){
        if($index == 0){
            $index += 1;
        }
        // 1つ前の値と比べる
        if($array[$index] >= $array[$index-1]){
            $index += 1;
        // もしも1つ前の値の方が大きかったら、入れ替えをする
        }else{
            $tmp = $array[$index];
            $array[$index] = $array[$index-1];
            $array[$index-1] = $tmp;
            // indexを-1してまた1つ前の値と比べる
            $index -=1;
        }
    }
    return $array;
}