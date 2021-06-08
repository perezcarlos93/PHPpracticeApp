<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>" method="POST">
        <label for="string">Enter String Here: </label>
        <input type="text" name="string">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>


<?php 


if(isset($_POST['submit'])){
    $string = $_POST['string'];

    $filteredWords = array('fuck', 'shit', 'ass');
    
    $filtered = str_ireplace($filteredWords, "*", $string);
    echo "<br>";
    echo $filtered;
};