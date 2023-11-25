<?php
    $username="root";
    $password="";
    $localhost="localhost:3306";
    $dbname="khachhang";

    $conn= mysqli_connect($localhost,$username,$password,$dbname);
    if(!$conn)
    {
        die ("ket noi khong thanh cong :".$conn);
    }else{
            echo("ket noi thanh cong");
    }        
?>