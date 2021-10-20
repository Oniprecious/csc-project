?php
//program to solve quadratic equation
if($_SERVER["REQUEST_METHOD"]=="GET")
{
?>
<form action=<?php echo $_SERVER["REQUEST_METHOD"]?>method="POST">
Enter the value of a 
<input type="text" name="A">
<br/>
Enter the value of b
 <input type="text" name="B">
 <br/>
Enter the value of c
<input type="text" name="c"
<br/>
<input type="submit" value="submit">
</form>
<?php
} elseif($_SERVER["REQUEST_METHOD"]=="POST"){

    $a=$_POST["A"];
    $b=$_POST["B"];
    $c=$_POST["C"];
    $x1=($b+(b**2-4*$a+$b**.5)/(2*$a);
    $x2=($b+(b**2-4*$a+$b**.5)/(2*$a);
    echo "the value of x is $x1 or $x2";
}
?>
