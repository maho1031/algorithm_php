<?php

$nums = [0, 1, 5, 7, 9, 11, 15, 20, 24];
var_dump(linear_search($nums, 15));
var_dump(binary_search($nums, 15));

function linear_search($numbers,$value){
    for($i = 0; $i < count($numbers); $i++){
        if($numbers[$i] == $value){
            return $i;
        }
    }
    return -1;
}

function 