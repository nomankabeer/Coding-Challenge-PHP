<?php
    /*
    In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.
    */
function highAndLow($numbers)
    {
        $numbers = explode(' ', $numbers);
        $high = $numbers[0];
        $low = $numbers[0];
        foreach ($numbers as $num) {
            if ($high < $num) {
                $high = $num;
            }
            if ($low > $num) {
                $low = $num;
            }
        }
        return $high . ' ' . $low."\n";
    }
    
echo highAndLow("1 2 3 4 5");  // return "5 1"
echo highAndLow("1 2 -3 4 5"); // return "5 -3"
echo highAndLow("1 9 3 4 -5"); // return "9 -5"

?>