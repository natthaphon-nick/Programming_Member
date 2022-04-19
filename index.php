<?php
 include("conn/config.php");
 if(!isset($_SESSION)){
    session_start();
 }
 if($_SESSION['id_end'] == "")
 {
  header("content-type:text/html;charset=utf-8");
   echo "<script>alert('กรุณา Login เข้าสู่ระบบ');</script>";
   echo "<script type='text/javascript'>window.location = 'login.php';</script>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Member</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<!-- <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/picker_date.js"></script>-->
    <!-- /theme JS files -->

	<!-- Theme JS files -->
	 <script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	 <script src="global_assets/js/plugins/tables/datatables/extensions/fixed_columns.min.js"></script>
	 <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	 <script src="assets/js/app.js"></script>
	 <script src="global_assets/js/demo_pages/datatables_extension_fixed_columns.js"></script>
	<!-- /theme JS files -->
	
    
    <!-- ใส่รูป -->
	<link rel="shortcut icon" href="global_assets/images/T121_mini.png" />

</head>
<?php

	$SQLSSS = "SELECT * FROM `User` WHERE FullName = '".$_SESSION["id_end"]."'";
	$QuerySSS = mysqli_query($objConnect, $SQLSSS);
	$ResultSSS = mysqli_fetch_array($QuerySSS, MYSQLI_ASSOC);
	
?>
<body>

	<!-- Main navbar -->
	<?php require_once('header.php'); ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php require_once('sidebar.php'); ?>
		<!-- /main sidebar -->

			<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="row">
                    <div class="col-xl-12">

						<!-- Highlighting rows and columns -->
						<div class="card">
							<div class="row">
								<div class="col-xl-12">
									
								</div>
							</div>
							
						
						</div>
						<!-- /highlighting rows and columns -->
					</div>
				</div>
  
		</div>
		</div>
    </div>
		<!-- /main content -->
	
	<?php

		// echo "<script>alert('ไม่สามารถเข้าสู่ระบบได้!!');</script>";
		// 	echo "<script type='text/javascript'>window.location = 'login.php';</script>";
	?>

</body>

</html>
