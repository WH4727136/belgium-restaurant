<?php
    require 'connect.php';
    if(isset($_POST['btnSend']))
    {
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
   
    $sql = "INSERT INTO kh (TenKhachHang,SDT,Email,Diadiem,NGdatban,ThoiGian,Soluong,Khac) VALUES ('$ten',$SDT,'$Email','$diadiem','$Ngdb','$thoigian',$Solg,'$Khac')";
    
    if($conn->query($sql)===TRUE)
        {
             echo"TINH TRANG KET NOI :Luu du lieu thanh cong\n";
             
            
        }else{
            echo "Loi {$sql}<br>".$conn->error;
        }
    }
    
?>

