<?php
// database connection code
//if(isset($_POST['Name']))
//echo $_POST["fname"];
if (!empty($_POST['fname'] )) 

{ 
	//
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','csc-project'); 

// get the post records

$fname = $_POST["fname"];
$matric = $_POST['matric'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$phone = $_POST['phone'];
//echo $_POST['phone'];

// database insert SQL code
$sql = "INSERT INTO  `signup` ( `fname`, `matric`, `email`, `password`, `cpassword`, `phone`) VALUES ('$fname',  '$matric', '$email', '$password', '$cpassword', '$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "signup successful";
}



else
{
	
	echo "registration not successful?";
	
}
}
else 
{
	echo "submit not working";
}
?>
