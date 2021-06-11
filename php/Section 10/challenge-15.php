<?php


$cities = array("Berlin", "Amsterdam", "Paris", "New York", "Brisbane");

$moreCities = array("Sydney", "Helsinki", "Beijing", "Dublin", "Rome");

$evenMoreCities = array("Austin", "Philadelphia", "Los Angeles", "Pasadena", "Chino Hills");

$mergedCities = array_merge_recursive($cities, $moreCities, $evenMoreCities);

sort($mergedCities);

echo "<pre>";
print_r($mergedCities);

echo "<ol>";

foreach ($mergedCities as $city) {
    echo "<li> $city </li>";
};

echo "</ol>";