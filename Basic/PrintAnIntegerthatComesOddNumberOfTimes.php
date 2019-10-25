<?php
/**
 * User: Noman Kabeer
 * Date: 25-Oct-2019
 * Time: 1:12 PM
 * Probles:
 * Given an array, find the int that appears an odd number of times.
 * There will always be only one integer that appears an odd number of times.
 */
function findIt($seq)
{
    $odd = 0;
    $num = 0;
    foreach ($seq as $val) {
        foreach ($seq as $val_2) {
            if ($val == $val_2) {
                $odd++;
            }
        }
        if ($odd % 2 != 0) {
            return $val;
            break;
        }
        $odd = 0;
    }
}
$arr = [1,2,3,2,3,4,5,2];
echo findIt($arr);



