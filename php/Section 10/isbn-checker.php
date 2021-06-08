<!-- Take in user Input -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISBN Checker</title>
</head>

<body>
    <h2>Enter your ISBN number here</h2>
    <form action="" method="POST">
        <input type="text" name="input" />
        <br>
        <br>
        <input type="submit" name="submit" />
    </form>
</body>

</html>


<?php

// Define Variables
$input = $_POST['input'];


if(isset($_POST['submit'], $input)){
    
    $array = str_split($input);
    
    foreach($item in $array){
        if(is_integer($item)){
            
        }
    }
    
};

// Check if ISBN is valid

// Alert if it is or is not