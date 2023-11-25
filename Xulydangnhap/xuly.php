<?php
    require'../Connection/connection.php';
    if(isset($_POST['btn-reg'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['confirm_password'];
        $number = $_POST['number'];
        $gender = $_POST['radGT'];

        if(!empty($fullname)&&!empty($username)&&!empty($password)&&!empty($repassword)&&!empty($number)&&!empty($gender)){
            
            $sql = "INSERT INTO `cus_users`(`fullname`,`username`,`password`,`repassword`,`number`,`gender`) VALUES('$fullname','$username','$password','$repassword','$number','$gender')";

            if($conn->query($sql)===TRUE){
                echo"Luu du lieu thanh cong";
            }else {
                echo"Loi{$sql}".$conn->error;
            }
        }else{
            
            echo"Vui long nhap day du thong tin";
           
        }
    }
?>

<a href="../SignUp/signup.php">Return</a>