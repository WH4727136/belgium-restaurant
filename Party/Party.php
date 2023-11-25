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
require 'connect.php';
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
					<h2 class="tieudetrang">PARTY</h2>
				</div>
				<div class="col-sm-5"> 
				</div>
			</div>
		</div>
	</div>
	<div class="noidungtrang">  
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<table class="table">
						<tr> 
							<th>Tên Khách Hàng</th>
							<th>Số Điện Thoại</th>
							<th>Email</th>
							<th>Địa Điểm Đặt Bàn</th>
							<th>Ngày</th>
							<th>Thời Gian Dự Tiệc</th>
							<th>Số Lượng</th>
							<th>Yêu Cầu Thêm</th>
							<th>Tùy Chỉnh</th>
							<th>Tùy Chỉnh</th>
						</tr>
						<?php
						$sql = "SELECT * FROM  kh ";
						$result =  $conn -> query($sql);
						// Numeric array
						
						while ($rows = $result -> fetch_array()) {
								
						?>
						<tr>
							<td><?php echo $rows["TenKhachHang"];?></td>
							<td><?php echo $rows["SDT"];?></td>
							<td class="yeucau"><?php echo $rows["Email"];?></td>
							<td><?php echo $rows["Diadiem"];?></td>
							<td><?php echo $rows["NGdatban"];?></td>
							<td><?php echo $rows["ThoiGian"];?></td>
							<td><?php echo $rows["Soluong"];?></td>
							<td><?php echo $rows["Khac"];?></td>
							<td><a href="YCsua.php?id=<?php  echo $rows['ID'] ?>">Sửa</a></td>
							<td><a href="Xoa.php?id=<?php  echo $rows['ID'] ?>">Xóa</a></td>
						</tr>
						<?php
							}
						?>
					</table>
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