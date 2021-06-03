<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="login/css/util.css">
  <link rel="stylesheet" type="text/css" href="login/css/main.css">
  <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="login/vendor/bootstrap/js/popper.js"></script>
  <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="login/vendor/select2/select2.min.js"></script>
  <script src="login/vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <script src="login/js/main.js"></script>
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="login/images/img-01.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="" method="post" id="login_form">
          <span class="login100-form-title">
            ADMIN LOGIN
          </span>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="email" placeholder="Mã Nhân Viên" required autofocus>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Password" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="login" >Login</button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="dangky.php">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php
 include_once('config/database.php');
  @session_start();
   // check đăng nhập
  if (isset($_SESSION['nv_admin'])) {
     header('location:index.php');
  }
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $matkhau=isset($_POST["pass"]) ? md5($_POST["pass"]): '';
    $sql_dangnhap="select * from NhanVien where  MaNV ='$email' and MatKhau='$matkhau'";
    $run_dangnhap=mysqli_query($conn,$sql_dangnhap);
    $dangnhap=mysqli_fetch_array($run_dangnhap);
    $count_dangnhap=mysqli_num_rows($run_dangnhap);
    if($count_dangnhap==0){
      echo '<script>alert("Sai tài khoản hoặc mật khẩu ! Xin mời nhập lại .")</script>';
    }else{
      $_SESSION['nv_admin']=$dangnhap;
      
                      
      header('location:index.php');
      
    }
                
  }
?>
</body>
</html>