<?php 
	include_once('config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'all':
				?><h4>Quản Lý Nhân  Viên  </h4><hr> <?php 
					include_once('quanlynhanvien/them.php');
					include_once('quanlynhanvien/hoso.php');
				break;
			
			case 'sua':
				?><h4>Cập nhập</h4><hr> <?php 
					include_once('quanlynhanvien/sua.php');
				break;		
			default:
					
				break;
		}
	}


?>