<?php

$servername = "127.0.0.1";
$username = "root";
$password = NULL;
$db = "webdev";

// -- database setup --
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>