<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Reset password</title>
</head>
<body>
  <form action="formAction.php" method="post">
    <fieldset>
      <legend> Reset Your Password </legend>
      <label for="email"> Email : </label>
      <input type="email" name="email" id="" placeholder="Enter your email address"> <br/>
      <label for="new_password"> New Password : </label>
      <input type="password" name="new_password" id="" placeholder="Enter a password"> <br/>
      <input type="submit" value="reset password" name="reset_password">
    </fieldset>
    
  </form>
</body>
</html>