<?php
$host='localhost';
$username='HAMDAN';
$password='770760';
$dbname = "hamdan";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
{
die('Could not Connect MySql Server:' .mysql_error());
}
?>
