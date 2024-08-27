<?php

$arr = [99, 3, 12, 45, 60, 100, 31, 7, 28];

// ここで並び替え処理

for ($i = 0; $i <= count($arr) - 1; $i++) {
    //配列数の分だけループ
    for ($j = count($arr) - 1; $j >= $i + 1; $j--) {
        if ($arr[$j] < $arr[$j - 1]) {  //左隣の配列と比較
            //配列の入替
            $num = $arr[$j];
            $arr[$j] = $arr[$j - 1];
            $arr[$j - 1] = $num;
        }
    }
    echo $arr[$i] . ",";
}
