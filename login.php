<?php
  session_start();

  if(isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true) {
    $_SESSION["isLoggedIn"] = false;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Log in</title>
</head>
<body>
  <form action="formAction.php" method="post">
    <fieldset>
      <legend> Log In </legend>
      <label for="email"> Email : </label>
      <input type="email" name="email" id="" placeholder="Enter your email address"> <br/>
      <label for="password"> Password : </label>
      <input type="password" name="password" id="" placeholder="Enter a password"> <br/>
      <a href="reset_password.php">reset password</a><br/>
      <input type="submit" value="Log In" name="login">
    </fieldset>
  </form>
</body>
</html>