<?php

$numbers = [1,8,3,9,4,5,7];
$low = 0;
$count = count($numbers);
$high =  $count-1;
var_dump(quick_sort($numbers, $low, $high));

function quick_sort(array &$numbers, int $low, int $high){
    $pivot = $numbers[$high];
    $i = $low;
    $j = $high;
    

    while(1)
    {
        while($numbers[$i] < $pivot){
            $i++;
        }
        while($numbers[$j] > $pivot){
            $j--;
        }

        if($i >= $j){
            return $numbers;
            break;
        };

        // [$numbers[$i], $numbers[$j]] = [$numbers[$j], $numbers[$i]];
        $tmp = $numbers[$i];
        $numbers[$i] = $numbers[$j];
        $numbers[$j] = $tmp;

        $i++;
        $j--;

    }
    if($i-1 > $low){
        quick_sort($numbers, $low, $i-1);
    }
    if($j+1 < $high){
        quick_sort($numbers, $j+1,$high);
    }
    }


    // return $numbers;
