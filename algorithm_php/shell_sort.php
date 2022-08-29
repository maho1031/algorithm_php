<?php

$nums = [5,6,9,2,3];
var_dump(shell_sort($nums));

function shell_sort($numbers){
    $len_numbers = count($numbers);
    $gap = floor($len_numbers/2);
    
    
    while($gap > 0){
       
        for($i = $gap; $i < $len_numbers; $i++){
            $temp = $numbers[$i];
            $j = $i;
            // var_dump($j);

            // $gapが$j以下のとき・$tempの方が小さいとき            
            while($j >= $gap && $numbers[$j - $gap] > $temp){
                // var_dump($numbers[$j]);
                $numbers[$j] = $numbers[$j - $gap];
                $j -= $gap;

        }
        // 値が小さいときはそのまま
        $numbers[$j] = $temp;
       
    }
    $gap = floor($gap/2);
    }
    return $numbers;
}