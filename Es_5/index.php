<?php

// <!-- Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array. -->

$nums = [1,2,3,4,5,6,7,8,9,10];

$sum = 0;
$evenNum = 0;

foreach($nums as $num){
    if($num%2 == 0){
        $sum+=$num;
        $evenNum++;
    }
}

if($evenNum>0){
    $average = $sum/$evenNum;
}

echo $average;

?>