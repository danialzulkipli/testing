<?php

include('config.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($conn, "SELECT username from login where username = '$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
    header("location: login.php");
}

?>