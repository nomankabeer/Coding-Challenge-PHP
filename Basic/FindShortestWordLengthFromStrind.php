<?php
/**
 * User: Noman Kabeer
 * Date: 29-Oct-2019
 * Time: 1:12 AM
 * Probles:
 * Find shortest word length from strin
 * And return that shortest word length
 */
function findShort($str){
$str = explode(' ' , $str);
$shortest_word_len = strlen($str[0]);
foreach($str as $key => $word){
  if(strlen($word) < $shortest_word_len){
    $shortest_word_len = strlen($word);
  }
}
return $shortest_word_len;
}

$str = "Mass is neither be created or nor destroyed";
echo findShort($str);



