<?php
/**
 * User: Noman Kabeer
 * Date: 03-nov-2019
 * Time: 1:12 AM
 * Problem:
 * Search Insert Position
 * Given a sorted array and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.
 * You may assume no duplicates in the array.
 * Example 1:
    Input: [1,3,5,6], 5
    Output: 2
 *
 * Example 2:
    Input: [1,3,5,6], 2
    Output: 1
 *
 * Example 3:
    Input: [1,3,5,6], 7
    Output: 4
 *
 * Example 4:
    Input: [1,3,5,6], 0
    Output: 0
 */
function searchInsert($nums, $target)
{
    $check = in_array($target, $nums);
    if ($check) {
        foreach ($nums as $key => $num) {
            if ($num == $target) {
                return $key;
            }
        }
    } else {
        foreach ($nums as $key => $num) {
            if ($target > $num && $nums[$key + 1] > $target) {
                return $key + 1;
            }
        }
        if ($target < $nums[0]) {
            return 0;
        } else {
            return count($nums);
        }
    }
}
$nums = [1,3,5,6];
echo searchInsert($nums , 5);
?>