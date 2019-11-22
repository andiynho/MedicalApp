<?php

// four variables to connect to database
$host = "localhost";
$user = "root";
$pass = "usbw";
$database = "test";

// create a database
$mysqli = new mysqli($host, $user, $pass, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>