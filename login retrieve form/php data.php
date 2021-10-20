// PHP code to establish connection
// with the localserver
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'csc-project';

// Server is localhost with
// port number 3308
$servername='localhost:3308';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM signup ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>