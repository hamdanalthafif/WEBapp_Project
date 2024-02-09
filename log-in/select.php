<?php
include_once 'DB.php';

$s =  "SELECT * FROM accounts";
$q = mysqli_query($conn, $s);

if (!$q) {
    echo "QUERY does not work." . mysqli_error($conn);
    die;
}
while ($data = mysqli_fetch_array($q)) {

    echo "Full name = " . $data['fullname'] . "<br>";
    echo "Username = " . $data['username'] . "<br>";
    echo "Password = " . $data['password'] . "<br>";
    echo "Email address = " . $data['email'] . "<br>";
    echo "Phone = " . $data['phone'] . "<br> <hr>";


    mysqli_close($conn);
}
