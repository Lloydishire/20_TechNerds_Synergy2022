<?php
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(isset($_POST['user_name']) && isset($_POST['user_rollno']) && isset($_POST['user_class']) && isset($_POST['user_name']))
		{
			$user_name = $_POST['user_name'];
	    $user_rollno = $_POST['user_rollno'];
	    $user_class = $_POST['user_class'];
			$password = $_POST['password'];
		}
		if(!empty($full_name) && !empty($password) && !is_numeric($full_name))
		{
			$user_id = random_num(20);
			$query = "insert into user (user_id,user_name,user_rollno,user_class,password) values ('$user_id','$full_name','$rollno','$class','$password')";
			mysqli_query($con,$query);
			header("Location: login.php");
			die;
		}
    else
		{
			echo "Please enter some valid information";
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="CSS/l_style.css">
  </head>
  <body>
    <div class="Center">
      <h1>Sign Up</h1>
      <form method="post">
        <div class="Field">
          <input type="text" id="user_" value="" required>
          <span></span>
          <label>Full Name</label>
        </div>
        <div class="Field">
          <input type="text" id="user_class" value="" required>
          <span></span>
          <label>Class</label>
        </div>
        <div class="Field">
          <input type="text" id="user_rollno" value="" required>
          <span></span>
          <label>Roll No.</label>
        </div>
        <div class="Field">
          <input type="password" id="password" value="" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="Pass">Forgot Password?</div>
        <input type="submit" name="" value="Sign Up" onclick="writeData()">

        <div class="SignUp">
          Already A Member? <a href="Login.php">Login</a>
        </div>
      </form>
    </div>
</body>
</html>
