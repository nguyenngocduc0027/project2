<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng Ký</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">  
  <link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="Login/css/util.css">
  <link rel="stylesheet" type="text/css" href="Login/css/main.css">
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <script src="js/main.js"></script>
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div>
        <form class="login100-form validate-form" method="POST" action="">
        	<a href="home.php"><h1 style="text-align: center;">KTXMVC</h1></a>
          <br>
          <br>
          <span class="login100-form-title p-b-43"><h4 href="home.php" style="font-family: Arial, Helvetica, sans-serif;">ĐĂNG KÝ</h4></span>
          <br>
          	<div class="form-label-group">
            	<!-- <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="masv" required autofocus> -->
            	<label for="inputEmail">Mã Số Sinh Viên</label>
            	<input type="text" id="inputEmail" class="form-control" placeholder="Mã sinh viên" name="MaSV" required autofocus>
          	</div>
          	<br>
          	<div class="form-label-group">
            	<label for="inputhoten">Họ Tên</label>
            	<input type="text" id="inputhoten" class="form-control" placeholder="Họ Tên" name="HoTen" required>
          	</div>
          	<br>
          	<div class="form-label-group">
            	<label for="inputgioitinh">Giới Tính</label> <br>
            	<!-- <input type="text" id="inputgioitinh" class="form-control" placeholder="Nam/Nữ" name="GioiTinh" required> -->
            	<input type="radio" name="GioiTinh" value="Nam" checked> Nam<br>
				<input type="radio" name="GioiTinh" value="Nữ" 	checked> Nữ<br>
          	</div>
          	<br>
          	<div class="form-label-group">
            	<label for="inputngaysinh">Ngày Sinh</label>
            	<input type="date" id="inputngaysinh" class="form-control" placeholder="" name="NgaySinh" required>
          	</div>
          	<br>
          	<div class="form-label-group">
            	<label for="inputdiachi">Địa Chỉ</label>
            	<input type="text" id="inputdiachi" class="form-control" placeholder="Địa Chỉ" name="DiaChi" required>
          	</div>
          	<br>
          	<div class="form-label-group">
            	<label for="inputsodienthoai">Số Điện Thoại</label>
            	<input type="number" id="inputsodienthoai" class="form-control" placeholder="+84 xxx xxx xxx" name="SDT" required>
          	</div>
          	<br>
          	<div class="form-label-group">
            	<label for="inputmatkhau">Mật Khẩu</label>
            	<input type="password" id="inputmatkhau" class="form-control" placeholder="Password" name="MatKhau" required>
          	</div>
          	<br>
            <div class="container-login100-form-btn">
            	<button class="login100-form-btn" type="submit" name="dangky" >Đăng Ký</button>
          	</div>
          
          	<div class="text-center p-t-46 p-b-20">
            	<a href="login.php" class="txt1"><h3>Đăng Nhập Ngay</h3></a>
          	</div>
          	<div class="mr-md-auto text-center text-md-left">
          		<div class="flex-sb-m w-full p-t-100"></div>
        		<div class="copyright">
          			&copy; Copyright <strong><span>KTXMVC</span></strong>. All Rights Reserved. Designed by <a href="https://www.facebook.com/Duk.038099013860" target="_blank">Nguyễn Ngọc Đức</a>
        		</div>
      		</div>
		</form>
	</div>
</div>
</body>
</html>
<?php include_once("../config/database.php"); ?>
<?php

	if (isset($_POST["dangky"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$MaSV 		= $_POST["MaSV"];
		$HoTen 		= $_POST["HoTen"];
		$GioiTinh 	= $_POST["GioiTinh"];
		$NgaySinh 	= $_POST["NgaySinh"];
		$DiaChi 	= $_POST["DiaChi"];
		$SDT 		= $_POST["SDT"];
		$MatKhau 	= isset($_POST["MatKhau"]) ? md5($_POST["MatKhau"]): '';
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($MaSV == "" || $HoTen == "" || $GioiTinh == "" || $NgaySinh == "" || $DiaChi == "" || $SDT == "" || $MatKhau == "" ) {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}
		else{
			$sql="select * from sinhvien where MaSV='$MaSV'";
			$kt=mysqli_query($conn, $sql);
      			if(mysqli_num_rows($kt)  > 0){
					echo '<script>alert(" Mã Số Sinh Viên Đã Được Đăng Ký !"); window.location="login.php";</script>';
      			}
      			else{
      				$sql = "INSERT INTO sinhvien( MaSV, HoTen, GioiTinh, NgaySinh, DiaChi, SDT, MatKhau ) VALUES ( '$MaSV', '$HoTen', '$GioiTinh', '$NgaySinh', '$DiaChi', '$SDT','$MatKhau')";
					// thực thi câu $sql với biến conn lấy từ file database.php
					mysqli_query($conn,$sql);
					echo '<script>alert(" Bạn Đã Đăng Ký Thành Công!"); window.location="login.php";</script>';
      			}	
		}
	}

?>
