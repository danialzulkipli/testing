<?php

//create connection
$conn = mysqli_connect('localhost:8888', 'root', '', 'klinikalby');

//check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>