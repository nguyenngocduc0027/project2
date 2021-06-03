 <?php 
if (isset($_SESSION['sv_login'])) {
    $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    $sql2="select * from chitietdangky where MaSV=$masv and NgayTraPhong is null";
    $rs2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($rs2);
//?>
<h2 class="card-title text-center">TRẢ PHÒNG</h2><hr>
            <form class="col-md-12 m-auto" action="xuly/main.php?action=traphong" method="POST">
              <div class="form-row">
                 <div class="form-group col-sm-4">
                    <label for="masv"></label>
                    <h6 class="text-center">Mã Sinh Viên</h6>
                    <label class="form-control text-center" > <?php echo $sv['MaSV']; ?></label>
                    <input hidden name="masv" value="<?php echo $sv['MaSV'] ?>">

                 </div>
                 <div class="form-group col-sm-4">
                    <label for="hoten"></label>
                    <h6 class="text-center">Họ Và Tên</h6>
                    <label class="form-control text-center" ><?php echo $sv['HoTen']; ?> </label>
                 </div>
                  <div class="form-group col-sm-4">
                    <label for="phong"></label>
                    <h6 class="text-center">Phòng</h6>
                    <label class="form-control text-center"><?php if (isset($row2['MaPhong'])) {
                      echo $row2['MaPhong'];
                    }else {
                      echo "Chưa Đăng Ký Phòng";
                    }  ?></label>
                 </div>
               </div>

               <div class="form-group">
                
                 <label> <span style="color: red;font-size: 15px;">*Lưu ý : Bạn sẽ không được nhận lại tiền dư khi trả phòng trước thời hạn. Nhân viên ký túc xá sẽ kiểm tra lại tài sản trước khi cho bạn trả phòng. Hệ thống sẽ gửi thông báo sau !</span></label>
              </div>
        <hr>
              <button type="submit" name="trap" class="btn btn-lg btn-primary btn-block text-uppercase ">Trả Phòng</button>
           </form>
<?php } ?>