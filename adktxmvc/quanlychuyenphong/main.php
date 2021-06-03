<?php 
	include_once('config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'quanlychuyenphong':
				?><h4>Quản Lý Đăng Ký chuyển Phòng</h4><hr> <?php 
					include_once('quanlychuyenphong/danhsachdangky.php');
				break;
			case 'chitietdangky':
				?><h4>Chi Tiết Đăng Ký</h4><hr> <?php 
					include_once('quanlychuyenphong/chitietdangky.php');
				break;	
			default:
					
				break;
		}
	}
	
	

?>