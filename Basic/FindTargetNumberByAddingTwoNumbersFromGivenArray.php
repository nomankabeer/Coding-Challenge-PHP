<?php
/**
 * User: Noman Kabeer
 * Date: 1-nov-2019
 * Time: 1:12 AM
 * Probles:
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * Example:
 * Given nums = [2, 7, 11, 15], target = 9,
 * Because nums[0] + nums[1] = 2 + 7 = 9
 * return [0, 1].
 */
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