<?php
    /*
    Find Highest And Second Highest Number From Unsorted Array
    */
function FindHighestAndSecondHighestNumberFromUnsortedArray($numbers)
    {
        $highest_number = 0;
        $second_highest = 0;
        foreach ($numbers as $num) {
            if ($highest_number < $num) {
                $second_highest = $highest_number;
                $highest_number = $num;
            }
            elseif($second_highest < $num){
                $second_highest = $num;
            }
        }
        return "Highest number = ".$highest_number . ' And second highest number = ' . $second_highest."\n";
    }
    
echo FindHighestAndSecondHighestNumberFromUnsortedArray([2,3,5,1,22,4,5,6]); // 22 6

?>