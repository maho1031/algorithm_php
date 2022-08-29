<?php

$nums = [1, 5, 28, 25, 100, 52, 27, 91, 22, 22,24];
var_dump(bucket_sort($nums));

function insertion_sort($array){
    $count = count($array);

    for($i = 0; $i <= $count; $i++){
        $j = $i;
    

        while($j >= 1 && $array[$j - 1] > $array[$j]){
            
            $tmp = $array[$j];
            $array[$j] = $array[$j - 1];
            $array[$j - 1] = $tmp;

            $j--;
        }
    }
    var_dump($array);
    // return $array;
}
function bucket_sort2($numbers){
    $max = max($numbers);
    $count = count($numbers)-1;
    $size = round($max / $count);
    $bucket = array();

    for($i = 0; $i < $size; $i++){
        if(!count($bucket[$i])){
            $bucket[$i] = array();
        }
    }
    for($i = 0; $i <= $count; $i++){
        $num = floor($numbers[$i] / $size);

        if($num != $size){
            array_push($bucket[$num], $numbers[$i]);
        }else{
            array_push($bucket[$num-1], $numbers[$i]);
        }
       
    }
    // for($i = 0; $i < $count; $i++){
        $k = 0;
        $array = array();
        foreach($bucket as $key => $value){
            foreach($value as $key2 => $val){
                
                $array[$key2] = $val[$key2];
                var_dump($array);

            }
         
     }
}

function bucket_sort($numbers){
    $bucket = array();
    $max = 0;

    // バケツにindexを入れる
    for($i = 0; $i < count($numbers); $i++){

        // $bucket[$numbers[$i]に同じ数が入ってない間
        if(!count($bucket[$numbers[$i]])){
            $bucket[$numbers[$i]] = array();
            // var_dump($bucket);
        }
        array_push($bucket[$numbers[$i]], $numbers[$i]);
        
        if($numbers[$i] > $max){
            $max = $numbers[$i];
        }
    }

     $array = array();

     for($i = 0; $i <= $max; $i++){
  
            for($j = 0; $j < count($bucket[$i]); $j++){
                array_push($array, $bucket[$i][$j]);
            }
        }
;
        return $array;
    }


