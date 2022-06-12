<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "klinikalby";

//create connection
$conn = mysqli_connect($server, $user, $password, $database);

//check connection
/*
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/

?>