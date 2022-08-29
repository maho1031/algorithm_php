<?php
//--------------------------------------------------------------------
// 一次元配列マージソート
//
//   [引数]
//     $datas : 並べ替えをする配列
//
//   [戻り値]
//     元の変数が変更される
//--------------------------------------------------------------------
function mergeSort(&$datas) {
  // 要素数
  $count = count($datas);

  if($count <= 1) {
    // 要素数が 1 以下の場合

    return;
  }

  // 中央(ほぼ)
  $center = floor($count / 2);

  // 分割
  $datas1 = array_slice($datas, 0, $center);
  $datas2 = array_slice($datas, $center);

  // 各配列のマージソート
  mergeSort($datas1);
  mergeSort($datas2);

  // 結合後の配列(戻り値)
  $datas = array();

  // 要素数
  $count1 = count($datas1);
  $count2 = count($datas2);

  $i = 0;
  $j = 0;
  while($i < $count1 && $j < $count2) {
    // 両方に要素がある間

    // 比較値
    $value1 = $datas1[$i];
    $value2 = $datas2[$j];

    if($value1 <= $value2) {
      // 比較値が等しい または value1 が小さい場合

      $datas[] = $datas1[$i];
      $i++;
    }
    else {
      // value2 が小さい場合

      $datas[] = $datas2[$j];
      $j++;
    }
  }

  while($i < $count1) {
    // datas1 に要素がある間

    $datas[] = $datas1[$i];
    $i++;
  }

  while($j < $count2) {
    // datas2 に要素がある間

    $datas[] = $datas2[$j];
    $j++;
  }
}