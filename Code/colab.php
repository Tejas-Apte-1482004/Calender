<?php
     include("connection.php");
     
?>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="loginpage.css">
  <link rel="stylesheet" href="navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="j.js" defer></script>
  
  
  <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="homepage.php">Home</a>
        <a href="agroup.php">Group</a>
        <a href="colab.php">Add Group Event</a>
        <a href="event.php">See Events</a>
        <a href="loginpage.php">Login</a>
    </div>
    <span style="font-size:30px;cursor:pointer; position: absolute; top: 0; left: 0;" onclick="openNav()">&#9776; Task Manager</span>
    <script src="navbar.js"></script>
  </head>
  <body style =" background-color:purple">
  
  
    
     
      <form action="acolab.php" method="POST">
        <label for="group name">Group name:</label>
        <input type="text" id="group-name" name="gname" placeholder="Enter Group Name"><br>
        <label for="event-date">Date      :</label>
        <input type="date" id="event-date" name="cedate" placeholder="Enter date"><br>
        <label for="event-description">Description:</label>
        <input type="text" id="event-description" name="cedesc" placeholder="Enter event description"><br>
        <input type="submit" id="btn" value="ADD Event to Group" name="caevent"/>
</form>
      </div>
      
  </body>
</html>