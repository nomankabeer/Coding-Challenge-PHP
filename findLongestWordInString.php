<?php 
 // Function to find a longest word in string in php
function LongestWord($sen) {
$longesWord = null;
$longesWordCount = 0;
$words = explode(' ' , $sen);
$totalWords = count($words);
for($i = 0 ; $i < $totalWords ; $i++){
  if(strlen($words[$i]) > strlen(@$words[$i+1]) && $longesWordCount < strlen($words[$i])){
    $longesWordCount = strlen($words[$i]);
    $longesWord = $words[$i];
  }
}
$sen = "Given String: $sen <br>No. of words are $totalWords And Longest Word is $longesWord";
return $sen; 
}   
// keep this function call here  
echo LongestWord("I am a php programmer.");  
?>
