 <?php 
if (isset($_SESSION['sv_login'])) {
    $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    $sql="select * from sinhvien where MaSV=$masv";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    $sql2="select * from chitietdangky where MaSV=$masv";
    $rs2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($rs2);
//?>
<h2 class="card-title text-center">ĐĂNG KÝ CHUYỂN PHÒNG</h2><hr>
  <form class="col-md-12 m-auto" action="xuly/main.php?action=dangkychuyenphong" method="POST">
    <div class="form-row">
      <div class="form-group col-sm-5">
        <h6 class="text-center">Mã Sinh Viên</h6>
        <label for="myEmail"></label>
        <input type="text" class="form-control text-center"   value="<?php echo $row['MaSV'] ?>" disabled>
        <input hidden class="form-control" name="masv"  value="<?php echo $row['MaSV'] ?>">
      </div>
      <div class="form-group col-sm-2"></div>
      <div class="form-group col-sm-5">
        <h6 class="text-center">Họ Tên</h6>
        <label for="myPassword"></label>
        <input type="text" class="form-control text-center" id="myPassword"  value="<?php echo $row['HoTen'] ?>" disabled>
      </div>
    </div>
    <hr>
    <div class="form-group">
      <label for="inputAddress"></label>
      <h5>Chọn Số Người Của 1 Phòng :</h5>
        <div class="custom-control custom-checkbox" style="margin-left: 30px;">
          <input type="radio" class="custom-control-input" id="customCheck1" value="4" name="sno" checked>
          <label class="custom-control-label" for="customCheck1"><p> Phòng 8 Người</p></label>
        </div>
        <div class="custom-control custom-checkbox" style="margin-left: 30px;">
          <input type="radio" class="custom-control-input" id="customCheck2" value="6" name="sno"  >
          <label class="custom-control-label" for="customCheck2"><p>Phòng 10 Người</p></label>
        </div>
        <div class="custom-control custom-checkbox" style="margin-left: 30px;">
          <input type="radio" class="custom-control-input" id="customCheck3" value="8" name="sno"  >
          <label class="custom-control-label" for="customCheck3"><p>Phòng 12 Người</p></label>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-12">
          <label for="masv"></label>
          <h5>Lý Do Bạn Chuyển Phòng:</h5>
          <textarea class="form-control" style="min-height: 110px;" name="lydo" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress2"><span style="color: red;font-size: 20px;">*</span>Lưu ý :</label>
        <label>Hệ thống sẽ tự động chọn phòng cho bạn theo yêu cầu trên. Hệ thống sẽ gửi thông báo sau!</label>
      </div>
      <hr>
      <div class="form-group">
        <table class="table text-center badge-light">
          <caption>thông tin giá phòng</caption>
          <thead class="badge-info">
            <tr><th>#</th><th>Học Kỳ</th><th>Phòng 8 Người </th><th>Phòng 10 Người </th><th>Phòng 12 Người </th></tr>
          </thead>
          <tbody>
            <tr><td>1 </td><td>1 </td><td>300.000VNĐ/ 1ng</td><td>250.000VNĐ/ 1ng</td><td>200.000VNĐ/ 1ng</td></tr>
            <tr><td>2 </td><td>2 </td><td>300.000VNĐ/ 1ng</td><td>250.000VNĐ/ 1ng</td><td>200.000VNĐ/ 1ng</td></tr>
            <tr><td>3 </td><td>hè</td><td>330.000VNĐ/ 1ng</td><td>280.000VNĐ/ 1ng</td><td>230.000VNĐ/ 1ng</td></tr>
          </tbody>
        </table>
      </div>
      <hr>
      <button type="sub" name="dangkychuyenphong" class="btn btn-lg btn-primary btn-block text-uppercase ">Đăng ký chuyển phòng</button>
  </form>
<?php 


}
else{
    header('location:index.php?action=login');
}
?>