<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once 'DB1.php';
  $E_user_name = "";
  $E_passl = "";
  $E_pass2 = "";
   if (isset($_POST['User'])) {
    $f = $_POST["fir"];
    $l = $_POST["last"];
    $u = $_POST["User"];

    $p = strval($_POST["pass"]);
    $p2 = strval($_POST["pass2"]);
    $c = $_POST["City"];
    $z = $_POST["Zip"];
    $pd = $_POST["pdatil"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender =$_POST["gender"];


    $far = preg_match('@[A-Z]@', $f);
    $far2 = preg_match('@[a-z]@', $f);


    $las = preg_match('@[A-Z]@', $l);
    $las2 = preg_match('@[a-z]@', $l);
    $las3 = preg_match('@[^AL]@', $l);

    $pas = preg_match('@[0-9]@', $p);
    $pas2 = preg_match('@[a-z]@', $p);
    $pas3 = preg_match('@[^m]@', $p);

    $number = preg_match('@[0-9]@', $phone);
    if (!(ctype_alpha($f))) {
      $E_user_name = "you must enter the name or enter only alphabatic characters";
      echo $E_user_name;
    } else if ($p != $p2) {
      $E_pass2 = "Please rewrite match password";
      echo $E_pass2;
    }
    
    else if (empty($p) || !$pas || !$pas2 || !$pas3 || strlen($p) < 8) {
      $E_passl = "password should be at least 4 characters in length and should include at least one number, 
      one upper case letter, one lowerc case letter and \w characters";
      echo $E_passl;
    }
    
    else if (empty($email) || (!(filter_var($email, FILTER_VALIDATE_EMAIL)))) {
      echo "your email either empty or invalid";
    } 
    
    else {
      $folder = "/seav";
      $img = $_FILES["file"]["name"];
      $tmp = $_FILES["file"]["tmp_name"];
      $type = $_FILES["file"]["type"];
      $path = "seav/" . $_FILES["file"]["name"];
      $sql = "INSERT INTO hamdan.puys (firstname, lastname, username, password, city, zip,
              Productdetials,email, phone, gender, img_name, img_type, img_path)
              VALUES ('$f','$1', '$u', '$p', '$c', '$z', '$pd', '$email', '$phone','$gender','$img', '$type', '$path')";
      if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
      } else {
        echo "Error: " . $sql . mysqli_error($conn);
      }

      move_uploaded_file(
        $_FILES["file"]["tmp_name"],
        "seav/" . $_FILES["file"]["name"]
      );
      echo "file Stored in: "  . "seav/" . $_FILES["file"]["name"];
      mysqli_close($conn);
    }
   }
  ?>
</head>

</body>

</html>