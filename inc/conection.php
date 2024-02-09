<?php
$host = "localhost";
$username = "ha3";
$password = "12345";
$dbname = "ha3"

$conn = mysqli_connect($host, $username, $password,$dbname);
if (!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

