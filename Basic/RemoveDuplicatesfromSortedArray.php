<?php
/**
 * User: Noman Kabeer
 * Date: 03-nov-2019
 * Time: 1:12 AM
 * Problem:
 * Given a sorted array nums, remove the duplicates in-place such that each element appear only once and return the new length.
 * Do not allocate extra space for another array, you must do this by modifying the input array in-place with O(1) extra memory.
 * Example 1:
 * Given nums = [1,1,2]
 * Your function should return length = 2, with the first two elements of nums being 1 and 2 respectively.
 * It doesn't matter what you leave beyond the returned length.
 */
function removeDuplicates(&$nums) {
    foreach($nums as $key => $num){
        if($num == @$nums[$key+1]){
            unset($nums[$key+1]);
        }
    }
}
$nums = [1,2,2,3,3,3,4,5,5,5,6,7,8,9];
removeDuplicates($nums);
var_dump($nums);
?>