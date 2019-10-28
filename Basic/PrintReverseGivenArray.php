<?php
/**
 * User: Noman Kabeer
 * Date: 29-Oct-2019
 * Time: 1:12 AM
 * Probles:
 * Print reverse array of given array
 */
function reverseArray($arr){
	$n = count($arr);
	for($i=$n;$i>0;$i--){
		echo $arr[$i-1].' ';
	}
}
$arr = [1,2,3,4,5,6,7,8,9];
reverseArray($arr);
?>