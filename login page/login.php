<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','csc-project');

// get the post records

$txtfull Name = $_POST['full name'];
$txtmatric = $_POST['matric'];
$txtemail = $_POST['email'];
$txtpassword = $_POST['password'];
$txtconfirmpassword = $_POST['confirmpassword'];
$txtphone = $_POST['phone'];

// database insert SQL code
$sql = "INSERT INTO `signup` ( `fldfull name`, `fldmatric`, `fldemail`, `fldpassword`, 'fldconfirmpassword', 'fldphone') VALUES ('0', '$txtfull_Name', '$txtmatric', '$txtemail', '$txtpassword', '$txtconfirmpassword', '$txtphone')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "signup successful";
}
}
else
{
	echo "registration not successful?";
	
}
?>
