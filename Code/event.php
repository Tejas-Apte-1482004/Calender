<html>
<link rel="stylesheet" href="event.css">    
<?php
include("connection.php");
session_start();


$username = $_SESSION['lusername'];
$sql = "select * from tasks where username = '$username'";
$result = mysqli_query($conn, $sql);
?>
<link rel="stylesheet" href="navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="j.js" defer></script>
  
  <body >
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
<table class="event-table">
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Description</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo"<tr>";
    echo"<td> ".$row["ID"]."</td>";
   // echo"</td><td>".$row["username"]."</td>";
    echo"</td><td>".$row["date"]."</td>";
    echo"</td><td> ".$row["description"]."</td>";
    echo"</tr>"; 
    echo "</br> " ;
}
?>
</table>
</p>

</html>
