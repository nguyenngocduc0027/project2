<?php 
	include_once('config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'quanlytraphong':
				?><h4>Quản Lý Đăng Ký Trả Phòng</h4><hr> <?php 
					include_once('quanlytraphong/danhsachdangky.php');
				break;
			case 'chitietdangky':
				?><h4>Chi Tiết Đăng Ký</h4><hr> <?php 
					include_once('quanlytraphong/chitietdangky.php');
				break;	
			default:
					
				break;
		}
	}


?>