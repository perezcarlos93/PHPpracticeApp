<?php

$sentence = "This is a sentence";

// String Length
$length = strlen($sentence);
// echo "Length of string is " . $length;

// How Many Words
$words = str_word_count($sentence);
// echo "There are " . $words . " words";

// String Replacement
$string = "John|Sam|Billy|Karen|Ben|Jane|Bob";

$newString = str_replace('|', ', ', $string);

// echo $newString;


// String Shuffling 
$string = "basketball";

$newString = str_shuffle($string);

echo $newString;