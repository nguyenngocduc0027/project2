<?php 
	include_once('config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		
			

		switch ($view) {
			case 'quanlyphong':
				?><h4>Quản Lý Phòng  </h4><hr> <?php 
				include_once('quanlyphong/them.php');
					include_once('quanlyphong/phong.php');
				break;
			
			case 'sua':
				?><h4>Quản Lý Phòng -> Cập nhập</h4><hr> <?php 
					include_once('quanlyphong/sua.php');
				break;		
			default:
					
				break;
		}
	}


?>