<?php

$cities = array('London', 'Paris', 'Los Angeles');

echo "<pre>";
print_r($cities);

// Add new items to end of Array
array_push($cities, 'Austin', 'New York');

echo "<pre>";
print_r($cities);


// Adds new items to beginning of array
array_unshift($cities, 'Amsterdam', 'Berlin');