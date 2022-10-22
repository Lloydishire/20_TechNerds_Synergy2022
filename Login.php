<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/l_style.css">
  </head>
  <body>
    <div class="Center">
      <h1>Login</h1>
      <form method="post">
        <div class="Field">
          <input type="text" name="full_name" value="" required>
          <span></span>
          <label>Name</label>
        </div>
        <div class="Field">
          <input type="text" name="password" value="" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="Pass">Forgot Password?</div>
        <input type="submit" name="" value="Login">
        <div class="SignUp">
          Not A Member? <a href="SignIn.php">Sign Up</a>
        </div>
      </form>
    </div>
  </body>
</html>