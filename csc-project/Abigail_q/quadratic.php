<?php
if (isset($_POST['submit'])) //check if the form is been submitted
{
    //assign variables
    $a = $_POST['A'];
    $b = $_POST['B'];
    $c = $_POST['C'];
    //after assigning variables you can now calculate your equation
    $x1 =(-$b + sqrt($b * $b - (4 * $a * $c))) / (2 * $a);
    $x2 =(-$b - sqrt($b * $b - (4 * $a * $c))) / (2 * $a);
    echo "x<sub>1</sub> = {$x1} and x<sub>2</sub> = {$x2}";
} else {
    echo "invalid number";
    //here you can put your HTML form
    
}
?>