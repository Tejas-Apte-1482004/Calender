<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form action="sign.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="nuname"><b>Username</b></label>
          <br>
          <input type="text" placeholder="Enter Username" name="nuname" required>
            <br>
          <label for="npsw"><b>Password</b></label>
          <br>
          <input type="password" placeholder="Enter Password" name="npsw" required>
            <br>
          <label for="nrpsw"><b>Repeat Password</b></label>
          <br>
          <input type="password" placeholder="Repeat Password" name="nrpsw" required>
            <br>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
          <br>
          <label for="login">Already have an account <a href="loginpage.php">login here</a></label>
      
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <input type="submit" id="btn" value="Sign Up" name="signup"/>
          </div>
        </div>
      </form> 
</body>
</html>