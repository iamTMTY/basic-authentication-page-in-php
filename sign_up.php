<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Sign up</title>
</head>
<body>
  <form action="formAction.php" method="post">
    <fieldset>
      <legend> Sign Up </legend>
      <label for="first_name"> First Name : </label>
      <input type="text" name="first_name" id="" placeholder="Enter your email address"> <br/>
      <label for="surname"> Surname : </label>
      <input type="text" name="surname" id="" placeholder="Enter your email address"> <br/>
      <label for="email"> Email : </label>
      <input type="email" name="email" id="" placeholder="Enter your email address"> <br/>
      <label for="password"> Password : </label>
      <input type="password" name="password" id="" placeholder="Enter a password"> <br/>
      <label for="date_of_birth"> Date of Birth : </label>
      <input type="date" name="date_of_birth" id=""> <br/>
      <input type="submit" value="sign up" name="sign_up">
    </fieldset>
  </form>
</body>
</html>