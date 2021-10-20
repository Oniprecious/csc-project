<?php
$servername = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'csc-project';

// Create connection
$conn=mysqli_connect($url,$username,$password,"csc-project");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE signup SET name='favor' WHERE matric=1902030024";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>