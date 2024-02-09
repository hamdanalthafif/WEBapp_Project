<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:antiquewhite;">
    <?php
    include_once "DB.php";
    $i = $_POST["id"];
    $p = $_POST["name"];
    $t = $_POST["type"];
    $pr = $_POST["price"];

    $sql = "INSERT INTO hamdan.product
    (id_product,name_product,type_product,price_product)
    values ('$i','$p','$t','$pr')";
    if (mysqli_query($conn, $sql)) {
        echo "new record has been added successfully ! ";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>

</html>