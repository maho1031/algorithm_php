<?php

$nums = [5,4,1,8,7,3,2,9];
var_dump(merge_sort($nums));

function merge_sort(&$numbers)
{
    $count = count($numbers);
    // 値の数が1以下の場合はそのまま返す
    if($count <= 1){
        return;
    }

    // 配列を右側と左側に分ける。
    $center = floor($count / 2);

    $left = array_slice($numbers, 0, $center);
    $right = array_slice($numbers, $center);
    
    // 再帰呼び出し
    merge_sort($left);
    merge_sort($right);

    // 新たな配列を作成
    $numbers = array();


    $i = 0;
    $j = 0;

// 両方に値がある間
    while($i < count($left) && $j < count($right)) {

       if($left[$i] <= $right[$j]){
           $numbers[] = $left[$i];
            $i++;

       }
       else {
       $numbers[] = $right[$j];
        $j++;
       }
    }

    // $leftに値がある間
    while($i < count($left)){
       $numbers[] = $left[$i];
        $i++;
    }

    // $rightに値がある間
    while($j < count($right)){
        $numbers[] = $right[$j];
        $j++;
    }

    return $numbers;

}