<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"csc-project");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE signup SET password='goldsilver' WHERE matric=1902030024";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>