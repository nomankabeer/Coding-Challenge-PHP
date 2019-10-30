<?php

function breakingRecords($scores , $n) {
$result = array();
$max_score = $scores[0];
$mix_score = $scores[0];
$max = 0;
$min = 0;
foreach($scores as $key => $score){
    if($max_score < @$score && $max_score != $score){
        $max_score = $score;
        $max++;
    }
 
    if($mix_score > @$score && $mix_score != $score){
        $mix_score = $score;
        $min++;
    }
 
}
$result[] = $max;
$result[] = $min;
return $result;
}

$n = 10; 
$scores = [3, 4, 21, 36, 10, 28, 35, 5, 24, 42];
echo breakingRecords($scores , $n);