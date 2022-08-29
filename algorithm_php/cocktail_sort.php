<?php
$nums = [2, 1, 5, 7, 8, 3];



var_dump(cocktail_sort($nums));

function cocktail_sort($array){
    $count = count($array);
    $swapped = true;
    $start = 0;
    // index番号を-1
    $end = $count - 1;

    while($swapped){
        for($i = $start; $i < $end; $i++){
            if($array[$i] > $array[$i + 1]){
                $tmp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $tmp;
                $swapped = true;
            }
        }


        if(!$swapped){
            break;
        }

         // 最後まで行ったらfalseにする
            $swapped = false;
            $end = $end - 1;
      
        // $i=3,2,1,0,の順番で$i + 1と比べる
        for($i = $end - 1; $i > $start; $i--){
            var_dump($i);
            if($array[$i] > $array[$i + 1]){
                $tmp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $tmp;
                $swapped = true;
            }

            
        }

        // 左のリミットを1個ずらす
        $start = $start + 1;
    }

    return $array;


}