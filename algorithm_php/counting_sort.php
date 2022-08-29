<?php

$nums = [4,3,6,2,3,4,7];
var_dump(counting_sort($nums));

function counting_sort($numbers){
    $max_num = max($numbers);
    $counts = [];
    $result = [];

    // 添字と同じ値があったらカウントして入れる
    for($i = 0; $i <= count($numbers); $i++){
       foreach($numbers as $num){
        if($i == $num){
            $counts[$i] += 1;
        }
       }
    }

    // 前の値を足して入れる
    for($i = 0; $i <= count($numbers); $i++){
        $counts[$i] += $counts[$i - 1];
    }

    $i = count($numbers) - 1;
    while($i >= 0){
        $index = $numbers[$i];
        // var_dump($result[$counts[$index]-1]);
        $result[$counts[$index]-1] = $numbers[$i];
        $counts[$index] -= 1;
        $i -= 1;
        
       
    }

    
   ksort($result);
    // var_dump($counts[$index]);
    return $result;
}