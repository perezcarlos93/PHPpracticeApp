<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHPpractice</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="string" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php

if(isset($_POST['submit'])) {
    $string = $_POST['string'];
    
    $stringLength = strlen($string);
    
    echo $stringLength;
};

?>