<?php
     include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <form name="form" action="login.php" method="POST">
        <div class="imgcontainer">
          <h1 class="heading1">LOGIN PAGE</h1>
          <img src="clock smiley.jpeg" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label type="username" for="uname"><b>Username</b></label>
         <br>
          <input type="text" placeholder="Enter Username" name="uname" required>
      <br>
          <label type="password" for="psw"><b>Password </b></label>
          <br>
          <input type="password" placeholder="Enter Password" name="psw" required>
      <br>
          <input type="submit" id="btn" value="Login" name="Submit"/>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          <br>
         <span class="psw">Forgot <a href="forgetpass.php">password?</a></span>
         <span class="psw2">New here? <a href="signup.php">Sign up</a></span>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
        </div>
      </form> 
</body>
</html>