<?php
    /*
    You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.
    Implement a function likes :: [String] -> String, which must take in input array, containing the names of people who like an item. It must return the display text as shown in the examples:*/


function likes($names)
    {
        $count = count($names);
        if ($count == 0) {
            return 'no one likes this';
        } elseif ($count == 1) {
            return $names[0] . ' likes this';
        } elseif ($count == 2) {
            return $names[0] . ' and ' . $names[1] . ' like this';
        } elseif ($count == 3) {
            return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . ' like this';
        } elseif ($count > 3) {
            return $names[0] . ', ' . $names[1] . ' and ' . ($count - 2) . ' others like this';
        }
    }
echo likes([])."\n"; // must be "no one likes this"
echo likes(["Peter"])."\n"; // must be "Peter likes this"
echo likes(["Jacob", "Alex"])."\n"; // must be "Jacob and Alex like this"
echo likes(["Max", "John", "Mark"])."\n"; // must be "Max, John and Mark like this"
echo likes(["Alex", "Jacob", "Mark", "Max"])."\n"; // must be "Alex, Jacob and 2 others like this"

?>