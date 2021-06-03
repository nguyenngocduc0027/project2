<?php
 @session_start(); 
	if(isset($_SESSION['sv_login'])){
		unset($_SESSION['sv_login']);
		header('Location: login.php');
	}
?>