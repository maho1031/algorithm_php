<?php

$nums = [24,10,11,324,201,101,55];
var_dump(radix_sort($nums));

function counting_sort($numbers,$place){
    // $max_num = max($numbers);
    $counts = [];
    $result = [];

   
    // 添字と同じ値があったらカウントして入れる
    for($i = 0; $i <= count($numbers); $i++){
       foreach($numbers as $num){
        $i = floor($num / $place) % 10;
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
        $index = floor($numbers[$i] / $place) % 10;
        // var_dump($result[$counts[$index]-1]);
        $result[$counts[$index]-1] = $numbers[$i];
        $counts[$index] -= 1;
        $i -= 1;
        
       
    }

    
   ksort($result);
    // var_dump($counts[$index]);
    return $result;
}

function radix_sort($numbers){
    $max_num = max($numbers);
    $place = 1;
    while($max_num > $place){
        $numbers = counting_sort($numbers, $place);
        $place *= 10;
    }
    return $numbers;
}