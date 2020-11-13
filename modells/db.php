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

//Ha először futtatjuk a kódot akkor feltöltjük a test usert az admin táblába
$file = fopen("../firstTime.txt", "r") or die("Nem lehet megnyitni a firstTime.txt-t");
$firstTime = fread($file,filesize("../firstTime.txt"));
fclose($file);

if ($firstTime != 1) {

    $insert = "INSERT INTO logins (email, password) VALUES ('admin@vanegyotletem.hu', '123456')";

    if($conn->query($insert) === FALSE) {

        echo "Hiba a teszt admin beszűrásakor: " . $conn->error;

    } else {

        echo NULL;

    }

    //Töröljük a txt-ből a 0-át
    file_put_contents("../firstTime.txt", "");

    //Beírjuk az 1-est
    $file = fopen("../firstTime.txt", "w") or die("Nem lehet megnyitni a firstTime.txt-t");
    fwrite($file,'1');
    fclose($file);

}

?>