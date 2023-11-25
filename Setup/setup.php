<?php
     require'../Connection/setupconn.php';
     if(!isset($_POST['btnSend'])){
         
         $number = $_POST['number'];
         $email = $_POST['email'];
         $diaiiem = $_POST['diaiiem'];
         $date = $_POST['datet'];
         $thoigian = $_POST['thoigian'];
         $numbercustom = $_POST['numbercustom'];
         $otheridea = $_POST['otheridea'];
         $customer = $_POST['customer'];
       
         if(!empty($customer)&&!empty( $number)&&!empty( $email)&&!empty($date) &&!empty(  $thoigian ) &&!empty(  $numbercustom) &&!empty(  $otheridea ) &&!empty(  $diaiiem)  ){
             
             $sql = "INSERT INTO `tbl_setup`(`number`,`email,`diaiiem`,`datet`,`thoigian`,`numbercustom`,`customer`,`otheridea`) VALUES($number,'$email','$diaiiem','$date','$thoigian',$numbercustom,'$customer','$otheridea')";
 
             if($conn->query($sql)===TRUE){
                 echo"Luu du lieu thanh cong";
             }else {
                 echo"Loi{$sql}".$conn->error;
             }
         }else{
             echo"Sai thong mat khau hoac tai khoan vui long nhap lai";
            
         }
     } 
?>