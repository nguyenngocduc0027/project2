<?php 
  if (isset($_SESSION['sv_login'])) {
       $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    $sql="select * from sinhvien where MaSV=$masv";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    $sql2="select * from thongbao where MaSV=$masv order by NgayTB DESC , MaTB DESC";
    $rs2=mysqli_query($conn,$sql2);
    

?>
          <h5 class="card-title text-center">Thông Báo của bạn</h5><hr>

           <div class="col-md-12 m-auto" action="" method="">
              <div class="form-row ">
                 <div class="form-group col-sm-4 m-auto">
                    <label for="masv"></label>
                    <h6 class="text-center"> Mã Sinh Viên</h6>
                    <input type="text" class="form-control text-center" id="masv" value="<?php echo $row['MaSV'] ?>" disabled>
                 </div>
                 <div class="form-group col-sm-4 m-auto">
                    <label for="hoten"></label>
                    <h6 class="text-center">Họ tên</h6>
                    <input type="text" class="form-control text-center" id="hoten" value="<?php echo $row['HoTen'] ?>" disabled>
                 </div>
              </div><hr>
           </div>
<?php while ($row2=mysqli_fetch_array($rs2)) { ?>
           <div class="col-md-12 m-auto">

              <div class="form-row ">
                    <label style="color: black;" class="badge-info col-md-12">-><?php echo $row2['TieuDe'] ;?></label>
              </div>
              <div>
                    <label style="color: black;" class="badge-light col-md-12"><?php echo $row2['NoiDung'] ;?></label>
              </div>
                 <div class="form-row ">
                    <h6 style="margin-left: 450px;"><?php echo 'Người gửi : '.$row2['MaNV'].' --- '.$row2['NgayTB'];?></h6>
                 </div>
                 <hr class="badge-danger">
         </div><br>
<?php } ?>
<?php }?>