<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yinka Enoch Adedokun">
    <meta name="description" content="Simple Forgot Password Page Using HTML and CSS">
    <meta name="keywords" content="forgot password page, basic html and css">
    <link rel="stylesheet" href="forgotpass.css">
    <title>Forgot Password Page - HTML + CSS</title>
</head>
<body>
    <div class="row">
        <h1>Forgot Password</h1>
        <h6 class="information-text">Enter your registered username to reset your password.</h6>
        <div class="form-group">
            <form action="sign.php" method="POST">
            <input type="text" name="user_email" id="user_email">
            <p><label for="username">Username</label></p>
            <input type="password" name="npass" id="password">
            <p><label for="new password">Enter New Password</label></p>
            <input type="submit" id="btn" value="Reset Password" name="reset"/>
        </form>
        </div>
        <div class="footer">
            <h5>New here? <a href="signup.html">Sign Up.</a></h5>
            <h5>Already have an account? <a href="loginpage.html">Log In.</a></h5>
        </div>
    </div>
</body>
</html>
