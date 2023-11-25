<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="1.css">
	<link rel="stylesheet" type="text/css" href="vendor\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vendor\font-awesome.css">

	<title></title>
</head>
<body>

<?php
$ten=$_POST["Ten"];
$SDT=$_POST["SDT"];
$Email=$_POST["Email"];
$diadiem=$_POST["diadiem"];
$Ngdb=$_POST["Ngdb"];
$thoigian=$_POST["thoigian"];
$Solg=$_POST["Solg"];
$Khac=$_POST["Khac"];
?>  

<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="1.js"></script>
<script type="text/javascript" src="vendor\bootstrap.js"></script>
<div class="trangchu">
	<nav class="menu"> 
		<div class="container">
			<div class="row">
				<div class="col-sm-3"> 
					<p class="logo">Belgian </p>
					<p class="logoa">Vegetarian Restaurant</p>
				</div>
				<div class="col-sm-9"> 
					<ul class="danhmuc">
						<li><a href="../Home/1.html">Home</a></li>
						<li><a href="../About/About.html">About</a></li>
						<li><a href="../Contact/Contact.php">Contact</a></li>
						<li><a href="../Party/Party.php">Your Party</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="tieudetrang">  
		<div class="container">
			<div class="row">
				<div class="col-sm-5"> 
				</div>
				<div class="col-sm-2"> 
					<h2 class="tieudetrang">PROCESSING</h2>
				</div>
				<div class="col-sm-5"> 
				</div>
			</div>
		</div>
	</div>
	<div class="noidungtrang">  
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
				<div class="Contact chu">
					<h3 class="a c">Xin Chào!</h3>
					<p class="b">Giờ đón khách: </p>
					<p class="a ">10:00h – 22:00h</p>
					<p class="a">Belgian Café (Võ Văn Tần, Quận 3)</p>
					<p class="c">Đón khách: Thứ Hai – Thứ Bảy </p>
					<p class="c">Nghỉ: Chủ Nhật, trừ ngày Chay và ngày Lễ.</p>
					
					<p class="a">Belgian Garden (Thảo Điền, Quận 2)</p>
					<p class="c">Đón khách: Thứ Ba - Chủ Nhật</p>
					<p class="c">Nghỉ: Chủ Nhật, trừ ngày Chay và ngày Lễ.</p>
					<p class="a b">Belgian Lounge</p>
					<p> đang được chuyển đến địa điểm mới.</p>
					<img src="images/image-asset.png">
					<p class="a">Belgian Vegetarian, Café & Restaurant</p>
					<p>32, Võ Văn Tần, P.Võ Thị Sáu, Q.3, Tp. HCM</p>
					<img src="images/Map+Hum-02.jpg">
					<p class="a">Belgian Vegetarian, Garden & Restaurant</p>
					<p>32, Đường số 10, P. Thảo Điền, Q.2, Tp. HCM</p>
				</div> 
				</div>
				<div class="col-sm-7"> 
					<div class="maunhap">
					<form 	Name="maunhap"	
					Action="THEM.PHP"Method="Post" enctype="multipart/form-data"> 	
					<p>Tên khách - Guest's name*</p>
					<input type="text" name="Ten" size="20" maxlength="30" value="<?php echo"$ten" ?>">
					<p>Số điện thoại - Contact number*</p>
					<input type="text" name="SDT" size="20" maxlength="30"value="<?php echo"$SDT" ?>">
					<p>Email*</p>
					<input type="text" name="Email" size="20" maxlength="30"value="<?php echo"$Email" ?>">
					<p>Chọn địa điểm - Select the venue*</p>
                    <input type="text" name="diadiem" size="20" maxlength="30"value="<?php echo"$diadiem" ?>">
					<p>Ngày đặt bàn - Reserved date:(dd/mm/yyyy)</p>
					<input type="date" name="Ngdb" value="<?php echo"$Ngdb" ?>">
					<p>Giờ đến - Expected arrival time*</p>
					<input type="text" name="thoigian" value="<?php echo"$thoigian" ?>">
					<p>Số lượng khách - Number of guests*</p>
					<input type="text" name="Solg" size=“20” maxlength=“30” value="<?php echo"$Solg" ?>">
					<p>Yêu cầu khác - Special requests*</p>
					<input type="text" name="Khac" size=“20” maxlength=“30” value="<?php echo"$Khac" ?>">
					<p>Lưu ý:  Quý khách vui lòng đặt chỗ tối thiểu 4 tiếng trước thời gian dự định dùng bữa.</p>
					<input type="submit" name="btnSend" value="ĐẶT BÀN">
					<input type="reset"name="btnReset" value="XÓA">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="foot"> 
		<div class="container">
			<div class="row">
				<div class="col-sm-5"> 
				
				</div>
				<div class="col-sm-2"> 
					<p class="logo">Belgian </p>
					<p class="logoa">Restaurant</p>
				</div>
				<div class="col-sm-5"> 
					
				</div>
			</div>
		</div>
			<div class="container">
			<div class="row">
				<div class="col-sm-12"> 
				<p class="footchu">Operation hours: 10:00h - 22:00h</p>
				<br>
				<p class="footchu">Belgian Café - 32 Vo Van Tan St., Vo Thi Sau W., D.3, HCMC</p>
				<p class="footchu">Open: Monday – Saturday</p>
				<p class="footchu">Closed: Sundays (except Vegetarian days, holidays)</p>
				<br>
				<p  class="footchu">Belgian Garden - 32 D10 St., Thao Dien W., D.2, HCMC</p>
					<p  class="footchu">	Open: Tuesday – Sunday</p>
				<p  class="footchu">Closed: Mondays (except Vegetarian days, holidays)</p>
				<br>
				<p  class="footchu">Belgian Lounge - Moving to a new, exciting location (to be updated)</p>
				<div class="icon">
					
					<p>Contact:0388417406(Manager:Nguyễn Ngọc Lễ Nghĩa)</p>
					<a href=""><i class="fa-brands fa-facebook"></i></a>	
				<a href=""><i class="fa-regular fa-envelope"></i></a>
					</div>
				
				</div>

			</div>
		</div>
	</nav>
</div>
</body>
</html>