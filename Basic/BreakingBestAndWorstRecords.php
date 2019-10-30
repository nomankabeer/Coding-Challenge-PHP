<?php
/**
 * User: Noman Kabeer
 * Date: 30-Oct-2019
 * Time: 1:12 AM
 * Probles: Print How Many Times Player Break His Records
 * Link to the problem.
 * https://hackerrank-challenge-pdfs.s3.amazonaws.com/32335-breaking-best-and-worst-records-English?AWSAccessKeyId=AKIAJ4WZFDFQTZRGO3QA&Expires=1572411314&Signature=zicMdZjHoMtFO2RzCAsH34Pxa4g%3D&response-content-disposition=inline%3B%20filename%3Dbreaking-best-and-worst-records-English.pdf&response-content-type=application%2Fpdf
 */

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