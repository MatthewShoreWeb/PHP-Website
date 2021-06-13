<?php

$servername = "localhost"
$dbUsername = "root"
$dbPassword = ""
$dbName = "loginSystem"

$connect = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName)
 
if (!$conn) {
    die("Connection failed");
}

?>
