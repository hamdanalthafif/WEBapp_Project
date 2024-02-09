<?php
include_once 'DB1.php';
mysqli_select_db("hamdan",$conn);

$s =  "SELECT * FROM puys";
$q = mysqli_query($conn, $s);

if (!$q) {
    echo "QUERY does not work." . mysqli_error($conn);
    die;
}
while ($data = mysqli_fetch_array($q)) {

echo "<tr>";
    echo "<td>". "Firstname = " . $data['firstname'] . "</td>";
    echo "<td>"."Lastname = " . $data['lastname'] . "</td>";
    echo "<td>"."Username = " . $data['username'] . "</td>";
    echo "<td>"."Password = " . $data['password'] . "</td>";
    echo "<td>"."City = " . $data['city'] . "</td>";
    echo "<td>"."Zip = " . $data['zip'] . "</td>";
    echo "<td>"."Product detials = " . $data['Productdetials'] . "</td>";
    echo "<td>"."Email address = " . $data['email'] . "</td>";
    echo "<td>"."Phone number = " . $data['phone'] . "</td>";
    echo "<td>"."Gender = " . $data['gender'] ."</td>"."<hr>";
echo "<tr>";

    mysqli_close($conn);
}
