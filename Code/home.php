<?php
    include("connection.php");
    session_start();
     
     
    if(isset($_POST["aevent"])){
        $username = $_SESSION['lusername'];
        $date = $_POST['edate'];
        $desc = $_POST['edesc'];
        $sql = "INSERT INTO `tasks` (`ID`, `username`, `date`, `description`) VALUES (NULL, '$username', '$date', '$desc')";
        $result = mysqli_query($conn, $sql);
        echo '<script>
              window.location.href = "homepage.php"
              alert("Event added successfully")
              </script>';
    }