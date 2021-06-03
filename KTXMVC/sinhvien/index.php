<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo.ico">
  <link rel="icon" href="assets/img/logo.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> SINH VIÊN
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
   <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</head>
<body class="index-page sidebar-collapse">
	<?php session_start();
	  ob_start();
	  if (isset($_SESSION['sv_login'])) {
	  	include_once('config/database.php');
		include_once('include/header.php');
		include_once('include/main.php');
		include_once('include/footer.php');
	}
	else {
		header('location:login.php');
		}
	?>
</body>
</html>