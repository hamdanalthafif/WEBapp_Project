<?php
include_once 'DB.php';
$firstname =$_POST["firstname"];
$lastname =$_POST["lastname"];
$sql="UPDATE accounts set firstname ='".$firstname."',lastname ='" .$lastname 
."'WHERE Firstname ='puys".$firstname."'";
$query =mysqli_query($conn,$sql);
if (!$query) {
    echo "QUERY does not work." . mysqli_error($conn);
    die;
}
else
{
    echo "data successfully updated";
}
