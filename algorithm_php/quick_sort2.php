<?php
$numbers = [1,8,3,9,4,5,7];
var_dump(quick_sort($numbers, $low, $high));

function partition(array &$numbers, int $low, int $high){
    $i = $low-1;
    // １番右をpivotに設定
    $pivot = $numbers[$high];

    // $jは動かす数字
    for($j = $low; $j < $high; $j++){
        // $pivotの方が大きいとき、$iと$jの場所を入れ替える
        if($numbers[$j] < $pivot){
            $i += 1;
            [$numbers[$i], $numbers[$j]] = [$numbers[$j], $numbers[$i]];
        }
    }
    // $pivotを入れる
    [$numbers[$i+1], $numbers[$high]] = [$numbers[$high], $numbers[$i+1]];
    return $i + 1;
}

function quick_sort(array &$numbers){
    function _quick_sort(array &$numbers, int $low, int $high): void
    {
        if($low < $high)
        {
            $patition_index = partition($numbers, $low, $high);
            // $partion_indexより左を並び替え
            _quick_sort($numbers, $low, $patition_index - 1);
            // $partion_indexより右を並び替え
            _quick_sort($numbers, $patition_index + 1, $high);
        }
    }
    _quick_sort($numbers, 0, count($numbers)-1);
    return $numbers;
}