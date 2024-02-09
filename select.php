<?php
include_once 'DB.php';
mysqli_select_db("hamdan",$conn);

$s =  "SELECT * FROM product";
$q = mysqli_query($conn, $s);

if (!$q) {
    echo "QUERY does not work." . mysqli_error($conn);
    die;
}
while ($data = mysqli_fetch_array($q)) {

echo "<tr>";
    echo "<td>". "id_product = " . $data['id_product'] . "</td>";
    echo "<td>"."name_product = " . $data['name_product'] . "</td>";
    echo "<td>"."type_product = " . $data['type_product'] . "</td>";
    echo "<td>"."price_product = " . $data['price_product'] . "</td>";
    
echo "<tr>";

    mysqli_close($conn);
}
