<?php 
  if (isset($_SESSION['sv_login'])) {
    $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    $sql="select * from chitietdangky where MaSV=$masv and MaNV is NOT null and (NgayTraPhong is null or (NgayTraPhong is not null and TinhTrang='chưa duyệt'))";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    @$mapp=$row['MaPhong'];
    $sql12="select * from Phong where MaPhong ='$mapp'";
    $rs12=mysqli_query($conn,$sql12);
    $row12=mysqli_fetch_array($rs12);
    $sql23="select MaSV from chitietdangky where MaPhong ='$mapp' and (NgayTraPhong is null or NgayTraPhong is NOT null and TinhTrang='chưa duyệt')";
    $rs23=mysqli_query($conn,$sql23);
?> 
<h2 class="card-title text-center">PHÒNG VÀ ĐIỆN NƯỚC</h2><hr>

           <form class="col-md-12 m-auto" action="" method="">
              <div class="form-row m-auto">
                <div class="form-group col-sm-2"></div>
                 <div class="form-group col-sm-4">
                    <label for="masv"></label>
                    <h6 class="text-center">Mã sinh viên</h6>
                    <input type="text" class="form-control text-center" id="masv" value="<?php echo $sv['MaSV'] ?>" disabled>
                 </div>
                 <div class="form-group col-sm-4">
                    <label for="hoten"></label>
                    <h6 class="text-center">Họ và tên</h6>
                    <input type="text" class="form-control text-center" id="hoten" value="<?php echo $sv['HoTen'] ?>" disabled>
                 </div>
              </div>
              <div class="form-row"><div class="form-group col-sm-2"></div>
                 <div class="form-group col-sm-4">
                    <label for="masv"></label>
                    <h6 class="text-center">Phòng</h6>
                    <input type="text" class="form-control text-center" id="masv" value="<?php if(isset($row12['MaPhong'])) echo $row12['MaPhong']; else  echo "Trống" ?>" disabled>
                 </div>
                 <div class="form-group col-sm-4">
                    <label for="hoten"></label>
                    <h6 class="text-center">Khu</h6>
                    <input type="text" class="form-control text-center" id="hoten" value="<?php if(isset($row12['MaKhu'])) echo $row12['MaKhu']; else  echo "Trống" ?>" disabled>
                 </div>
              </div><hr>
                  
              <div class="form-group">
                <hr> <h6>Sinh viên trong phòng </h6>
                <table class="table text-center badge-light table-hover">
                  <thead class="badge-info">
                    <tr>
                      <th>#</th><th>Họ và tên</th><th>Số điện thoại</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php $i=0;
                   while ( $row23=mysqli_fetch_array($rs23)) {
                        $masv1=$row23['MaSV'];
                        $sql="select * from sinhvien where MaSV=$masv1";
                        $rs=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($rs);
                    ?>
                      <tr>
                       <td><?php echo $i+1;$i=$i+1; ?> </td><td> <?php echo $row['HoTen'] ?> </td><td><?php echo $row['SDT'] ?></td>
                    </tr>
                    
                 <?php   } ?>
                    
                  </tbody>
                </table>
              </div><hr><br>

              <div class="form-group">
                <hr class="badge-danger"> <h6>Tiền điện nước của phòng </h6>
                <table class="table text-center badge-light table-hover">
                  <thead class="badge-info">
                    <tr>
                      <th>Tháng</th><th>Tiền Điện</th><th>Tiền Nước</th><th>Tổng Tiền</th><th>Tình Trạng</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php $sql123="select * from hoadondiennuoc where MaPhong ='$mapp'";
                        $rs123=mysqli_query($conn,$sql123);
                   while ( $row123=mysqli_fetch_array($rs123)) {
                        
                    ?>
                      <tr >
                       <td><?php echo $row123['Thang']; ?> </td><td> <?php echo number_format($row123['TienDien']).' đ' ?> </td><td><?php echo number_format($row123['TienNuoc']).' đ' ?></td>
                       <td><?php echo number_format(($row123['TienNuoc']+$row123['TienDien'])).' đ' ?></td>
                       <td><?php if($row123['TinhTrang']==='chưa thu'){echo '<span class="text-danger"> Chưa Nộp</span>';}
                       else{ echo 'Đã Nộp';} ?></td>
                    </tr>
                    
                 <?php   } ?>
                    
                  </tbody>
                </table>
              </div><hr>
            
           </form>
<?php }?>