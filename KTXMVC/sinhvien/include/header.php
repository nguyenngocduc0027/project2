<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php">
          KTXMVC </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i>ĐĂNG KÝ
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="index.php?action=dkphong" class="dropdown-item">
                <i class="material-icons">layers</i>PHÒNG
              </a>
              <a href="index.php?action=chuyenphong" class="dropdown-item">
                <i class="material-icons">content_paste</i>CHUYỂN PHÒNG
              </a>
              <a href="index.php?action=traphong" class="dropdown-item">
                <i class="material-icons">content_paste</i>TRẢ PHÒNG
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=phongdango">
              <i class="material-icons">unarchive</i>TIỀN ĐIỆN
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=xemthongbao">
              <i class="material-icons">email</i> THÔNG BÁO
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span><?php if(isset($_SESSION['sv_login'])){ $nv=$_SESSION['sv_login'];echo $nv['HoTen'];} ?></span>
            <i class="material-icons">face</i></a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="index.php?action=capnhapthongtin" class="dropdown-item">
                <i class="material-icons">layers</i>PROFILE
              </a>
              <a href="logout.php" class="dropdown-item">
                <i class="material-icons">content_paste</i>LOGOUT
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>