<?php
include("connection.php");

if(isset($_POST["adgroup"])){
    $username = $_POST["usname"];
    $groupname = $_POST['grname'];

    
      $sql = "select * from colab where username = '$username' and groupname = '$groupname'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      if($count == 1){
        echo '<script>
        window.location.href = "agroup.php"
        alert("Cannnot Add to Group. Username already exists!!")
        </script>';
        }

    
        else {
            $sql = "INSERT INTO `colab` (`ID`, `username`, `groupname`) VALUES (NULL, '$username', '$groupname')";
            $result = mysqli_query($conn, $sql);
            echo '<script>
            window.location.href = "homepage.php"
            alert("Group created successfully")
            </script>';

        }
   
    
}