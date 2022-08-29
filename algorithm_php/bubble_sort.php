<?php
$nums = [2, 1, 5, 7, 8, 3];

var_dump(bubble_sort($nums));

function bubble_sort($array) {
    $count = count($array);

    for($i = 0; $i < $count; $i++){
        for($j = 0; $j < $count - 1; $j++){
            // 今の数字が次の数字より小さかったら入れ替え
            if($array[$j] > $array[$j + 1]){
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
            }
        }
    }
    return $array;
}
?>