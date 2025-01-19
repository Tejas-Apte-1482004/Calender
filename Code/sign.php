<?php 
    include("connection.php");
    if(isset($_POST['signup'])){
      $username = $_POST['nuname'];
      $password = $_POST['npsw'];

      $sql = "select * from login where username = '$username'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1){
        echo '<script>
        window.location.href = "signup.php"
        alert("SignUp failed. Username already exists!!")
        </script>';
        }
      else{
       $sql = "INSERT INTO `login` (`username`, `password`) VALUES ('$username', '$password')";
       $result = mysqli_query($conn, $sql);    
       header("Location:loginpage.php");
      } 
    }
    if(isset($_POST['reset'])){
      $username = $_POST['user_email'];
      $password = $_POST['npass'];

      $sql = "select * from login where username = '$username'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 0){
        echo '<script>
        window.location.href = "signup.php"
        alert("Username not found!!")
        </script>';
        }
      else{
        $sql = "UPDATE `login` SET `password` = '$password' WHERE 'username' = '$username'";
        $result = mysqli_query($conn, $sql);
        echo '<script> 
        window.location.href = "loginpage.php"
        alert("Password Reset Succsessfully!!")
        </script>';
      }
    }
     
  
?>