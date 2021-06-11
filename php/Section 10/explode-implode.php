<?php

$string = "John, Sarah, Ken, Ben, Amy";

// Breaks a string into an array by specifying a "separator" point
$names = explode(",", $string);

echo "<pre>";
print_r($names);

// Returns a string from an array - Counterpart to Explode
$imploded = implode(",", $names);

echo $imploded;