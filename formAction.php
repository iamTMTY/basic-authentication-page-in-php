<?php
  session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php
    // var_dump($_POST)
    if(isset($_POST["sign_up"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $date_of_birth = $_POST["date_of_birth"];
      $first_name = $_POST["first_name"];
      $surname = $_POST["surname"];

      $user = [
          "email" => $email,
          "password" => $password, 
          "date_of_birth" => $date_of_birth,
          "first_name" => $first_name,
          "surname" => $surname
        ];

      $registeredUser = json_decode(file_get_contents('files/users.json'), true);

      if(isset($registeredUser[$email])){
  ?>
        <p>user already registered, please login <a href="login.php">here</a></p>
  <?php
      } else {
        $registeredUser[$email] = $user; 
        file_put_contents('files/users.json', json_encode($registeredUser));
  ?>
        <p>user successfully registered, click <a href="login.php">here</a> to login</p>
  <?php
      }

    } elseif (isset($_POST["login"])){
      $email = $_POST["email"];
      $password = $_POST["password"];

      $registeredUser = json_decode(file_get_contents('files/users.json'), true);

      if(isset($registeredUser[$email]) && $registeredUser[$email]["password"] === $password) {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['first_name'] = $registeredUser[$email]['first_name'];
        $_SESSION['surname'] = $registeredUser[$email]['surname'];
        echo("<script> location.href = 'index.php' </script>");
      } else {
  ?>
        <p>invalid username or password, <a href="login.php"> try again </a> or <a href="sign_up.php"> sign up</a></p>
  <?php
      }
    } elseif (isset($_POST["reset_password"])){
      $email = $_POST["email"];
      $new_password = $_POST["new_password"];

      $registeredUser = json_decode(file_get_contents('files/users.json'), true);

      if(isset($registeredUser[$email])) {
        $registeredUser[$email]['password'] = $new_password;
        file_put_contents('files/users.json', json_encode($registeredUser));
  ?>
      <p>password reset successfully, click <a href="login.php"> here </a> to login </p>
  
  <?php
      } else {
  ?>
        <p>invalid username or password, <a href="login.php"> try again </a></p>
  <?php
      }
    } 
  ?>
  
</body>
</html>