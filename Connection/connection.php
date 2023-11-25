<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "info_users";

$conn = new mysqli($host,$username,$password,$db);

if($conn->connect_error){
    die("Connect fail" . $conn->connect_error);
}
?>