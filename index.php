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
    if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {
      echo('<p>Welcome, '.$_SESSION["first_name"].' '.$_SESSION['surname'].'</p><br/><br/>');
      echo("<p> click <a href='login.php'> here </a> to logout</p>");
    } else {
  ?>
      <p>
        <a href="login.php"> Log in </a><br/>
        OR<br/>
        <a href="sign_up.php"> Sign Up </a>
      </p>
  <?php
    }
  ?>

  
</body>
</html>