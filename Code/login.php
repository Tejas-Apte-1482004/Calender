<?php 
    include("connection.php");
    if(isset($_POST['Submit'])){
      $username = $_POST['uname'];
      $password = $_POST['psw'];

      $sql = "select * from login where username = '$username' and password = '$password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1){
        echo"$count";
        session_start();
          $_SESSION["lusername"] = $row["username"];
          $_SESSION["lpassword"] = $row["password"];
        header("Location:homepage.php");
      }
      else{
        echo '<script>
              window.location.href = "loginpage.php"
              alert("Login failed. Invalid username or password")
              </script>';
      }
    }
  
?>
