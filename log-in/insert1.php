<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
  include_once 'DB.php';
  $E_user_name = "";
  $E_passl = "";
  
  // if (isset($_POST['ok'])) {
    $f = $_POST["ful"];
    $u = $_POST["User"];

    $p = strval($_POST["pass"]);
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    $far = preg_match('@[A-Z]@', $f);
    $far2 = preg_match('@[a-z]@', $f);

    $pas = preg_match('@[0-9]@', $p);
    $pas2 = preg_match('@[a-z]@', $p);
    $pas3 = preg_match('@[^m]@', $p);
    
    $number = preg_match('@[0-9]@', $phone);

    if (!(ctype_alpha($f))) {
      $E_user_name = "you must enter the name or enter only alphabatic characters";
      echo $E_user_name;
    } 
     else if (empty($p) || !$pas || !$pas2 || !$pas3 || strlen($p) < 8) {
      $E_passl = "password should be at least 8 charecters in length and should be include at least one number , one upper case letter , one lower case letter and /w charecters";
      echo $E_passl;
    } else if (empty($email) || (!(filter_var($email, FILTER_VALIDATE_EMAIL)))) {
      echo "your email either empty or invalid";
    } else {
      
      $sql = "INSERT INTO hamdan.accounts ( username,fullname, email,phone,password)
VALUES ('$u','$f', '$email', '$phone', '$p')";
      if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
      } else {
        echo "Error: " . $sql . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
  // }
  ?>

</body>

</html>