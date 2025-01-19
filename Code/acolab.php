<?php
include("connection.php");

if(isset($_POST["caevent"])){
    $date = $_POST["cedate"];
    $desc = $_POST['cedesc'];
    $groupname = $_POST['gname'];


    $sql = "select * from colab where groupname = '$groupname'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    
    $arr[] = $row["username"];

    }
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i];
        echo"  ";
        $sql = "INSERT INTO `tasks` (`ID`, `username`, `date`, `description`) VALUES (NULL, '$arr[$i]', '$date', '$desc')";
        $result = mysqli_query($conn, $sql);
        echo $result;

    }
    echo '<script>
    window.location.href = "homepage.php"
    alert("Event added successfully")
    </script>';
}