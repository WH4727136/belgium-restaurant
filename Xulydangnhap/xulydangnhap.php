<?php
   
    require '../Connection/connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "SELECT * from cus_users WHERE username = '$username' and password ='$password'";

    $rq = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rq) > 0){
        
        echo"<script> alert('Registration Successful'); </script>";
        header("Location: ../Home/1.html");
    }else {
        echo"Sai tai khoan hoac mat khau";
    }
?>

<a href="../Login/login.php">Return </a>

