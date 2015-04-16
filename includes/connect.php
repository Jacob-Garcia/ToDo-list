<?php
// localhost is first because it's choosing that as the connectin base
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
// If database connection fails, then we want it to die and display the error message
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno - ')'
		. $mysqli->connect_error);
}
// Displays this message if the Connection is successful
else {
	echo "Connection made";
}
$mysqli->close();


?>