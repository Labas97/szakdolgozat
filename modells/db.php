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

$service_table = "CREATE TABLE IF NOT EXISTS service (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
`date` TIMESTAMP NULL ,
description TEXT NULL ,
image VARCHAR(255) NULL ,
`name` VARCHAR(255) NULL ,
price TEXT NULL ,
types TEXT NULL ,
url TEXT NULL  
)";

$email_table = "CREATE TABLE IF NOT EXISTS email_message (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
message TEXT NULL ,
receiver_email VARCHAR(255) NULL ,
receiver_name VARCHAR(255) NULL ,
sender_email VARCHAR(255) NULL ,
sender_name VARCHAR(255) NULL ,
subject VARCHAR(255) NULL  
)";

$login_table = "CREATE TABLE IF NOT EXISTS logins (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
email TEXT NULL  ,
password TEXT NULL  
)";

if ($conn->query($service_table) === FALSE) {

    echo "Hiba service tábla létrehozásakor: " . $conn->error;

} else {

    echo NULL;

}

if($conn->query($email_table) === FALSE) {

    echo "Hiba email_message tábla létrehozásakor: " . $conn->error;

} else {

    echo NULL;

}

if($conn->query($login_table) === FALSE) {

    echo "Hiba logins tábla létrehozásakor: " . $conn->error;

} else {

    echo NULL;

}

?>