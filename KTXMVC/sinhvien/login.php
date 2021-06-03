<!DOCTYPE html>
<html>
<head>
  <title>Đăng Nhập</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="Login/images/icons/favicon.ico">
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
<body style="background-color: #666666;">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="" method="post" id="login_form"> 
          <a href="../index.php"><h1 style="text-align: center;">KTXMVC</h1></a>
          <br>
          <br>
          <span class="login100-form-title p-b-43"><h4 href="home.php" style="font-family: Arial, Helvetica, sans-serif;">ĐĂNG NHẬP</h4></span>
          <br>
          <div class="form-label-group"> 
            <label for="inputEmail">Mã Số Sinh Viên</label>
            <input name="email" placeholder="Mã Sinh Viên" class="form-control" type="text" required autofocus>  
          </div> 
          <br>
          <div class="form-label-group">
            <label for="inputPassword">Mật Khẩu</label> 
            <input name="pass" placeholder="Password" class="form-control" type="password" required> 
          </div> 
          <hr>
          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>
            <div>
              <a href="doipass.php" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>
          <div class="container-login100-form-btn">
            <button type="submit" name="login" class="btn btn-md btn-danger pull-right">Đăng nhập </button> 
          </div>
          <div class="text-center p-t-46 p-b-20">
            <a href="dangky.php" class="txt1">Đăng Ký Tài Khoản !</a>
          </div> 
        </form>
      <div class="login100-more" style="background-image: url('Login/images/bg-02.jpg');"></div>
    </div>
  </div>
</div>
<?php
 include_once('../config/database.php');
  @session_start();
   // check đăng nhập
  if (isset($_SESSION['sv_login'])) {
     header('location:index.php');
  }
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $matkhau=isset($_POST['pass']) ? md5($_POST['pass']): '';
    $sql_dangnhap="select * from sinhvien where  MaSV ='$email' and MatKhau='$matkhau'";
    $run_dangnhap=mysqli_query($conn,$sql_dangnhap);
    $dangnhap=mysqli_fetch_array($run_dangnhap);
    $count_dangnhap=mysqli_num_rows($run_dangnhap);
    if($count_dangnhap==0){
      echo '<script>alert("Sai tài khoản hoặc mật khẩu ! Xin mời nhập lại .")</script>';
    }else{
      $_SESSION['sv_login']=$dangnhap;               
      header('location:index.php');
    }
                
  }
?>
</body>
</html>