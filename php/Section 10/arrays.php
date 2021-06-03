<?php

$names = array('Marry', 'James', 'John', 'Sharon');

echo "<pre>";
print_r($names);
echo "<br>";

$cities = ["London", "Paris", "New York"];

print_r($cities);
echo "<br>";


echo "<ol>";

foreach($names as $name) {
    echo "<li> $name </li>";
};

echo "</ol>";