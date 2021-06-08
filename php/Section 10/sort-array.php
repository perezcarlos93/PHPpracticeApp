<?php 

$names = array("John", "Marry", "James", "Amy");

rsort($names);

echo "<ol>";

foreach($names as $name){
    echo "<li>" . $name . "</li>";
};

echo "</ol>";