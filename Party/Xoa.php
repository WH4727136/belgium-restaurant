
<?php
require 'connect.php';
?>
<?php
if(isset($_GET["id"]))
{
	 $id=$_GET["id"];
	 
}
?>
<?php
$sql = "DELETE  FROM  kh WHERE id=$id";
$result =  $conn -> query($sql);
header("location:Party.php");							
?>
