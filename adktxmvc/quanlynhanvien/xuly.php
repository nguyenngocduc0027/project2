<?php 
session_start();
include_once('../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
    case 'them':
        $manv=$_GET['manv'];
        $ten=$_GET['ten'];
        $ns=$_GET['ns'];
        $dc=$_GET['dc'];
        $sdt=$_GET['sdt'];
        $mk=isset($_GET["pass"]) ? md5($_GET["pass"]): '';
        $sql="insert into nhanvien(MaNV,HoTen,NgaySinh,DiaChi,SDT,MatKhau) value('$manv','$ten','$ns','$dc','$sdt','$mk')" ;
        $rs=mysqli_query($conn,$sql);
          if($rs){
                    header('location:../index.php?action=nhanvien&view=all&thongbao=them');
          }
        break;
		case 'capnhap':
  			$manv=$_GET['manv'];
        $ten=$_GET['ten'];
        $ns=$_GET['ns'];
        $dc=$_GET['dc'];
        $sdt=$_GET['sdt'];
        $mk=isset($_GET["pass"]) ? md5($_GET["pass"]): '';
        $sql="update nhanvien set HoTen='$ten', NgaySinh='$ns',DiaChi='$dc',SDT='$sdt', MatKhau='$mk' where MaNV='$manv'" ;
        $rs=mysqli_query($conn,$sql);
          if($rs){
          					header('location:../index.php?action=nhanvien&view=all&thongbao=sua');
          }
  			break;  
    case 'xoa':
        $manv=$_GET['manv'];
        $sql="delete from nhanvien where MaNV='$manv'";
        $rs=mysqli_query($conn,$sql);
        if($rs){

               header('location:../index.php?action=nhanvien&view=all&thongbao=xoa');
        }
      break;

		default:
			# code...
			break;
	}
}


?>