<?php
     include("connection.php");
     
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dynamic Calendar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="j.js" defer></script>
  </head>
  <body>
  <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="homepage.php">Home</a>
        <a href="agroup.php">Group</a>
        <a href="colab.php">Add Group Event</a>
        <a href="event.php">See Events</a>
        <a href="loginpage.php">Login</a>
    </div>
    <span style="font-size:30px;cursor:pointer; position: absolute; top: 0; left: 0;" onclick="openNav()">&#9776; Task Manager</span>

    <!-- Display Event Information -->
    <div id="event-info"></div>
    <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded"></span>
          <span id="next" class="material-symbols-rounded"></span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
      <h4><u>Add Event :</u></h4>
      <form action="home.php" method="POST">
        <label for="event-date">Date      :</label>
        <input type="date" id="event-date" name="edate" placeholder="Enter date"><br>
        <label for="event-description">Description:</label>
        <input type="text" id="event-description" name="edesc" placeholder="Enter event description"><br>
        <input type="submit" id="btn" value="ADD Event" name="aevent"/>
</form>
      </div>
      <script src="navbar.js"></script>
  </body>
</html>