<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
// If database connection fails, then we want it to die and display the error message
if ($mysqli->connect_error) {
	die('Connection Error (' . $mysqli_>connect_errno - ')'
		. $mysqli->connect_error);
}
// Displays this message if the Connection is successful
else {
	echo "Connection made";
}
$mysqli->close;
?>
