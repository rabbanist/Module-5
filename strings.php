<?php 

// Strings Array
$strings = ["Hello", "World", "PHP", "Programming"];

// Loop through each string
foreach($strings as $string){
    // Count Vowels
    $stringVowelsCount = preg_match_all('/[aeiouAEIOU]/', $string);
    // Reverse String
    $stringReversed = strrev($string);
    
    // Print Results
    echo "Original String: $string, Vowel Count: $stringVowelsCount, Reversed String: $stringReversed \n";
}
