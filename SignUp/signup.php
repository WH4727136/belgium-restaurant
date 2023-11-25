<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="BT/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript" src="signup.js"></script>
    <div class="videodd">
        <video src="Images/humcf.mp4" autoplay muted loop></video>
        <div class="overlay"></div>
            <div class="form mt-2 ml-2" style="font-family: 'Times New Roman';">
                <form action="../Xulydangnhap/xuly.php" method="POST" name="" >
                    <h1 style="font-weight: bold; color: #f0cf56;" class="mb-2 mt-2">Đăng kí</h1>
                    <div class="form-box">
                        <input class="text-box" type="text"  name="fullname" id="fullame" placeholder="Tên đầy đủ" required> </br>
                        <input class="text-box" type="type"  name="username" id="username" placeholder="Tên tài khoản" required></br>
                        <input class="text-box" type="password"  name="password" id="password" placeholder="Mật khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu chứa ít nhất 8 chữ số, có ít nhất 1 kí tự in hoa, 1 kí tự thường và 1 số" required> <br>
                        <input class="text-box" type="password"  name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu" required> <br>
                        <input class="text-box" type="text"  name="number" id="number" placeholder="Số điện thoại" require>
                        <div class="Gender mt-2" style="color: aliceblue;">
                            <label for="" class="mr-1">Giới tính:</label>
                            <input type="radio" name="radGT" value="Nam">
                            <label for="radGT" class="mr-1">Nam</label>
                            <input type="radio" name="radGT" value="Nu">
                            <label for="radGT">Nữ</label>
                        </div>
                        <div class="btn">
                            <input type="submit" name="btn-reg" value="Đăng ký" class="btn-signup mb-2"> <br>
                            <a href="../Login/index.html">Đã có tài khoản ?</a> 
                        </div>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>