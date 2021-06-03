<?php 
session_start();
include_once('../config/database.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date1=getdate(); $ngay1=$date1['year']."-".$date1['mon']."-".($date1['mday']);
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':
			$mp=$_GET['mp'];
      $mk=$_GET['mk'];
      $sntd=$_GET['sntd'];
      $gia=$_GET['gia'];
        $sql="update phong set MaPhong='$mp', MaKhu='$mk', SoNguoiToiDa=$sntd, Gia=$gia where MaPhong='$mp'" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
        					header('location:../index.php?action=quanlyphong&view=quanlyphong&thongbao=sua');
        }
			break;
		  
      case 'xoa':
     $mp=$_GET['mp'];
        $sql="delete from Phong where MaPhong='$mp'";
        $rs=mysqli_query($conn,$sql);
        if($rs){

               header('location:../index.php?action=quanlyphong&view=quanlyphong&thongbao=xoa');
        }
      break;

    case 'them':
      $mp=$_GET['mp'];
      $mk=$_GET['mk'];
      $sntd=$_GET['sntd'];
      $gia=$_GET['gia'];
        $sql="insert into phong(MaPhong, MaKhu, SoNguoiToiDa, Gia ) values('$mp','$mk',$sntd,$gia)" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
                  header('location:../index.php?action=quanlyphong&view=quanlyphong&thongbao=them');
        }
      break;  
		default:
			# code...
			break;
	}
}


?>