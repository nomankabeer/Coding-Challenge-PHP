<?php

function twoSum($nums, $target) {
    foreach($nums as $i_index => $i){
        foreach($nums as $j_index => $j){
            if($i + $j == $target && $j_index != $i_index){
                return [$i_index , $j_index];
            }
        }
    }
}
$nums = [1,2,3,4,5,6,7,8,9];
echo twoSum($nums , 9);
?>