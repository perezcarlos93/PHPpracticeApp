<?php



if(isset($_POST['submit'])) {

    $answer = $_POST['units'];

    $value = $_POST['value'];
    
    if($answer == 'celsius') {
        $c = ($value - 32) * 5/9;

        echo $c;
    } else if ($answer == 'fahrenheit') {
        $f = ($value * 9) / 5 + 23;

        echo $f;
    }
};

?>