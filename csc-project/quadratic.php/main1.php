<?php


    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];

function roots($a, $b, $c) {
  $D = $b*$b - 4*$a*$c;
  if ($D >= 0){
    $x1 = (-$b + sqrt($D))/(2*$a);
    $x2 = (-$b - sqrt($D))/(2*$a);
    echo "Roots are: $x1, $x2 \n";   
  } else {
    $x1 = -$b/(2*$a);
    $x2 = sqrt(-$D)/(2*$a);
    echo "Roots are: $x1 ± $x2  \n"; 
  }
}

echo "Equation is x*x+5x+4=0\n";
echo"<br>";
roots(1,5,4);
echo"<br>";
echo "\nEquation is x*x+4x+5=0\n";
echo"<br>";
roots(1,4,5);
?>