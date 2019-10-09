<?php 
 // Function to find a given string is Palindrome in php
function PalindromeString($sen) {
$stringLength = strlen($sen)-1;
$stringLengthCount = $stringLength;
$ans = null;
for($i=0; $i< $stringLength ; $i++){
	if($sen[$i] != $sen[$stringLengthCount]){
		$ans = "Not";
		break;
	}
	$stringLengthCount--;
}
$sen = "Given string '$sen' is $ans Palindrome";
return $sen; 
}

// keep this function call here  
echo PalindromeString("abbcbba");
?>
