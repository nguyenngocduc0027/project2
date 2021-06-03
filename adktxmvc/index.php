<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ADMIN</title>
  <link href="template/img/favicon.ico" rel="icon">
  <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php     
  ob_start();
  session_start(); 
  
  if(!isset($_SESSION['nv_admin'])){ header('location:login.php'); }
  else {
    include_once('config/database.php');
  }
 ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <img src="template/img/favicon.ico">
        <div class="sidebar-brand-text mx-3">ADMIN QLKTX</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- đăng ký -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlydangkyphong&view=quanlydangkyphong">
          <i class="fas fa-fw fa-table"></i>
          <span>XL ĐĂNG KÝ PHÒNG</span>
        </a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlydangkyphong&view=danhsachall">
          <i class="fas fa-fw fa-table"></i>
          <span>DSXLDK PHÒNG</span></a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlychuyenphong&view=quanlychuyenphong">
          <i class="fas fa-fw fa-table"></i>
          <span>XL CHUYỂN PHÒNG</span></a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlytraphong&view=quanlytraphong">
          <i class="fas fa-fw fa-table"></i>
          <span>XL TRẢ PHÒNG</span></a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlydiennuoc&view=quanlydiennuoc">
          <i class="fas fa-fw fa-table"></i>
          <span>XL ĐIỆN NƯỚC</span></a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlyphong&view=quanlyphong">
          <i class="fas fa-fw fa-table"></i>
          <span>QL PHÒNG</span></a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=khu&view=khu">
          <i class="fas fa-fw fa-table"></i>
          <span>QL KHU</span></a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=nhanvien&view=all">
          <i class="fas fa-fw fa-table"></i>
          <span>QL NHÂN VIÊN</span></a>
      </li>

      <!-- Điện nước -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=sinhvien&view=all">
          <i class="fas fa-fw fa-table"></i>
          <span>QL SINH VIÊN</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="font-size: 15px;color: #333" class="mr-2 d-none d-lg-inline text-gray-600 small"><?php if(isset($_SESSION['nv_admin'])){ $nv=$_SESSION['nv_admin'];
                         echo $nv['HoTen'];} ?> </span>
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div >
            <?php include_once 'include/controller.php'; ?>
          </div>
        </div>

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn Muốn Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Bạn click "Logout" sẽ kết thúc phiên làm việc !</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="template/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="template/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="template/js/demo/chart-area-demo.js"></script>
  <script src="template/js/demo/chart-pie-demo.js"></script>

</body>

</html>
