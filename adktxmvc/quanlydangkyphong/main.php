<?php 
	include_once('config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'quanlydangkyphong':
				?><h4>XỬ LÝ ĐĂNG KÝ PHÒNG</h4><hr> <?php 
					include_once('quanlydangkyphong/danhsachdangky.php');
				break;
			case 'chitietdangky':
				?><h4>Quản Lý Đăng Ký Phòng -> Xử Lý Đăng Ký -> Chi Tiết Đăng Ký</h4><hr> <?php 
					include_once('quanlydangkyphong/chitietdangky.php');
				break;
			case 'danhsachall':
				?><h4>DANH SÁCH ĐÃ XỬ LÝ ĐĂNG KÝ</h4><hr> <?php 
					include_once('quanlydangkyphong/danhsachall.php');
				break;			
			default:
					
				break;
		}
	}
	
	

?>