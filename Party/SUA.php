<?php
    require 'connect.php';
        $ten=$_POST["Ten"];
        $SDT=$_POST["SDT"];
        $Email=$_POST["Email"];
        $diadiem=$_POST["diadiem"];
        $Ngdb=$_POST["Ngdb"];
        $thoigian=$_POST["thoigian"];
        $Solg=$_POST["Solg"];
        $Khac=$_POST["Khac"];
    echo"
    <br>Ten khach hang :$ten<br><br>
    So dien thoai:$SDT<br><br>
    Email :$Email<br><br>
    Dia diem:$diadiem<br><br>
    Ngay dat ban :$Ngdb<br><br>
    Thoi gian :$thoigian<br><br>
    So luong :$Solg<br><br>
    Khac :$Khac<br><br>
    ";
    
    $sql = "UPDATE kh  SET TenKhachHang='$ten',SDT=$SDT,Email='$Email',Diadiem='$diadiem',NGdatban='$Ngdb',ThoiGian='$thoigian',Soluong=$Solg,Khac='$Khac' WHERE id=$id ";
	// header("location :Party.php");
    
    
?>

