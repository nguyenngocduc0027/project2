  <?php 
    if (isset($_SESSION['sv_login'])) {
       $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    $sql="select * from sinhvien where MaSV=$masv";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    
  ?>
<h2 class="card-title text-center">THÔNG TIN CÁ NHÂN</h2>
            <form class="form-signin" action="xuly/main.php?action=capnhapthongtin" method="POST">
              <div class="form-label-group">
                <span>Mã sinh viên </span>
                <input type="text" id="inputText" class="form-control"  value="<?php echo $row['MaSV'] ?>"  disabled >
                <input hidden id="inputText" class="form-control" name="masv" value="<?php echo $row['MaSV'] ?>"  >
              </div>
              <br>
              <span>Họ và tên </span>
              <div class="form-label-group">
              <input type="text" id="inputText" class="form-control" name="name" value="<?php echo $row['HoTen']?>" required  >
              </div>
              <br>
              <span>Giới Tính </span>
              <div class="form-label-group">
              <input type="text" id="inputText" class="form-control" placeholder="Họ và Tên" value="<?php echo $row['GioiTinh']?>" disabled required >
              </div>
              <br>
              <span>Ngày sinh </span>
              <div class="form-label-group">
                <input type="date" name="ns" max="3000-12-31" min="1000-01-01" class="form-control" value="<?php echo $row['NgaySinh']?>">
              </div>
              <br>
              <span>Quê quán </span>
              <div class="form-label-group">
                <input type="text" id="inputText" class="form-control" name="dc" value="<?php echo $row['DiaChi']?>" required  >
              </div>
              <br>
              <span>Số điện thoại </span>
              <div class="form-label-group">
                <input type="text" id="inputText" class="form-control" name="sdt" value="<?php echo $row['SDT']?>" required  >
              </div>
              <br>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
              </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" name ="sv_capnhaptt" type="submit">Cập Nhập</button>
              <br class="my-4">
            </form>
    <?php 
      
    
    }
   else{
    header('location:index.php?action=login');
   }
//định dạng ngày
//      $date=date_create($ns);
//     echo date_format($date,"d/m/Y ");
    ?>


