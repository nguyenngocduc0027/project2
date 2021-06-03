<?php
  	date_default_timezone_set('Asia/Ho_Chi_Minh');
  	$date=getdate(); $ngay=$date['year']."-".$date['mon']."-".($date['mday']);
if(isset($_POST['dangkychuyenphong'])){
	$masv=$_POST["masv"];
	$sql1="select MaSV,MaDK,MaPhong from chitietdangky where MaSV=$masv and (MaNV is not null and NgayDangKy is not null and TinhTrang='đã duyệt' and NgayTraPhong is null)";
	$rs1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_array($rs1);
	$madk=$row['MaDK'];
    $sql="select * from chitietchuyenphong where MaSV=$masv and  TinhTrang='đã duyệt' or TinhTrang is NULL";
	$rs=mysqli_query($conn,$sql);
  	$dem=mysqli_num_rows($rs);
  	$map1=$row['MaPhong'];
    if($dem>0){
		$masv=$_POST["masv"];
		$sno=$_POST['sno'];
		$lydo=$_POST['lydo'];
		$pdo=$_POST['phongdo'];
//check giới tính để tìm khu theo giới tính 
		$sql="select * from sinhvien where MaSV=$masv";
	    $rs=mysqli_query($conn,$sql);
	    $row=mysqli_fetch_array($rs);
	    if($row['GioiTinh']==='Nam'){
//tìm khu theo giới tính Nam
	    	$sql1="select MaKhu from Khu where Sex='Nam'";
	    	$rs1=mysqli_query($conn,$sql1);
	    	$row1=mysqli_fetch_array($rs1);
	    	$makhu=$row1['MaKhu'];
//      	echo $makhu;
// Tìm phòng cho sinh viên   	
			$sql2="SELECT  MaPhong  from Phong where MaKhu = '$makhu' and MaPhong !='$pdo' and SoNguoiToiDa = $sno and (SoNguoiHienTai<SoNguoiToiDa ) ORDER BY SoNguoiHienTai DESC LIMIT 1";
			$rs2=mysqli_query($conn,$sql2);
	    	$row2=mysqli_fetch_array($rs2);
	    
	    	$map=$row2['MaPhong'];
// thêm sinh viên vào phòng và update số người trong phòng
	    	$sql3="UPDATE chitietchuyenphong set MaPhongO='$map1', MaPhongChuyen='$map',Lydo='$lydo', TinhTrang=N'chưa duyệt', NgayDangKy='$ngay', LanChuyen=(LanChuyen+1) where MaDK='$madk'";
	    	$rs3=mysqli_query($conn,$sql3);
	    	if($rs3){
	    		$sql4="UPDATE  `Phong` set `SoNguoiHienTai`=(`SoNguoiHienTai`+1) where MaPhong='$map'";
	    		$rs4=mysqli_query($conn,$sql4);
	    		header('location:../index.php?action=&tb=ok1');
	    	}
	    }elseif ($row['GioiTinh']==='Nu') {
//tìm khu theo giới tính Nữ
	    	$sql1="select MaKhu from Khu where Sex='Nu'";
	    	$rs1=mysqli_query($conn,$sql1);
	    	$row1=mysqli_fetch_array($rs1);
	    	$makhu=$row1['MaKhu'];
       	echo $makhu;
// Tìm phòng cho sinh viên   	
			$sql2="SELECT  MaPhong  from Phong where MaKhu = '$makhu'  and MaPhong !='$pdo' and SoNguoiToiDa = $sno and (SoNguoiHienTai<SoNguoiToiDa ) ORDER BY SoNguoiHienTai DESC LIMIT 1";
			$rs2=mysqli_query($conn,$sql2);
	    	$row2=mysqli_fetch_array($rs2);
	    	
	    	$map=$row2['MaPhong'];
// thêm sinh viên vào phòng và update số người trong phòng
	    	$sql3="UPDATE chitietchuyenphong set MaPhongO='$map1', MaPhongChuyen='$map',Lydo='$lydo', TinhTrang=N'chưa duyệt', NgayDangKy='$ngay', LanChuyen=(LanChuyen+1) where MaDK='$madk'";
	    	$rs3=mysqli_query($conn,$sql3);
	    	if($rs3){
				$sql4="UPDATE  `Phong` set `SoNguoiHienTai`=(`SoNguoiHienTai`+1) where MaPhong='$map' ";
	    		$rs4=mysqli_query($conn,$sql4);
	    		header('location:../index.php?action=&tb=ok1');
	    	}
	    }

    }   
    else {
	header('location:../index.php?action=&tb=loi');
}
}
