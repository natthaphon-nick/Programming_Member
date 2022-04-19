<?php 
	date_default_timezone_set("Asia/Bangkok");
	include("conn/config.php");
	mysqli_query($objConnect, "SET NAME UTF8");
	error_reporting (E_ALL ^ E_NOTICE); //กัน error ค้นหา
	
	include("conn/config.php");
	 if(!isset($_SESSION)){
		session_start();
	 }
	 if($_SESSION['id_end'] == ""){
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
	<!--<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/datatables_advanced.js"></script>-->
	<!-- /theme JS files -->
	
	<!-- Theme JS files -->
	 <script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	 <script src="global_assets/js/plugins/tables/datatables/extensions/fixed_columns.min.js"></script>
	 <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	 <script src="assets/js/app.js"></script>
	 <script src="global_assets/js/demo_pages/datatables_extension_fixed_columns.js"></script>
	<!-- /theme JS files -->
	
</head>

<body onload="myHide();">

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
			<form>
			<div class="content">

				<!-- Highlighting rows and columns -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<legend class="text-uppercase font-size-lg font-weight-bold"><i class="icon-users4 mr-2"></i>รายการสมาชิกในระบบ</legend>
					</div>
					
					<div class="card-body">
						<div class="row">
							<label class="col-form-label col-md-1" style="font-size: 14px">ชื่อ-นามสกุล :</label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="text_keyword" id="text_keyword" />
							</div>

							<label class="col-form-label col-md-1" style="font-size: 14px">Email :</label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="text_Email" id="text_Email" />
							</div>
							
						</div>
						<div class="form-group row">
							
							<label class="col-form-label col-md-1" style="font-size: 14px">วันที่:</label>
							<div class="col-md-3">
								<input type="date" name="date1" id="date1" class="form-control">
							</div>

							<label class="col-form-label col-md-1" style="font-size: 14px">Username :</label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="text_Username" id="text_Username" />
							</div>
						</div>
						<button type="submit" class="btn bg-primary"><i class="icon-search4"></i>&nbsp;Search</button>

					
					<table class="table datatable-fixed-left" width="100%" >
						<thead>
							<tr>
								<th class="text-center">จัดการ</th>
								<th class="text-center">รหัสสมาชิก</th>
								<th class="text-center">ชื่อ-นามสกุล</th>
								<th class="text-center">ชื่อผู้ใช้ระบบ</th>
								<th class="text-center">รหัสผ่าน</th>
								<th class="text-center">อีเมล์</th>
								<th class="text-center">วันที่สมัครสมาชิก</th>
							</tr>
						</thead>
						
						<tbody>
								 
								<?php
								$i=1;

								ini_set('display_errors', 1);
								  error_reporting (E_ALL ^ E_NOTICE);


								  if(!empty($_GET['text_keyword'] || $_GET['date1'] || $_GET['text_Username'] || $_GET['text_Email'])){//หากมีการเลือก
									 $SQLg = "SELECT * FROM user WHERE 1=1";

									 if(!empty($_GET['text_keyword'])){//หากมีการเลือก
							  
										$getname=$_GET['text_keyword'];
										$SQLg.=" AND user.FullName LIKE '%".$getname."%'";
									  
									   }
									  
									if(!empty($_GET['date1'])){//หากมีการเลือก
										$getdate1=$_GET['date1'];
										$SQLg.=" and user.Create_Date = '".$getdate1."%' ";
									}

									if(!empty($_GET['text_Username'])){//หากมีการเลือก
										$getuser=$_GET['text_Username'];
										$SQLg.=" and user.Username LIKE '%".$getuser."%' ";
									}

									if(!empty($_GET['text_Email'])){//หากมีการเลือก
										$getmail=$_GET['text_Email'];
										$SQLg.=" and user.Email LIKE '%".$getmail."%' ";
									}
									}else{
										$SQLg = "SELECT * FROM user WHERE 1=1";
									}

									 $objQuery = mysqli_query($objConnect,$SQLg);
									 $num_row = mysqli_num_rows($objQuery);
								
									 while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
									 if($num_row >= 1){
								  
								?>
							<tr class="text-center">
								<td><a class="text-primary border-primary border-2 rounded-round p-1 mb-1 mt-1" href="edit_member.php?id=<?=$objResult["ID_User"]?>" ><i class="icon-pencil7" style="font-size: 20px"></i></a>&nbsp;
								<a class="text-danger border-danger border-2 rounded-round p-1 mb-1 mt-1" href="delete_user.php?id=<?=$objResult["ID_User"]?>"><i class="icon-user-cancel" style="font-size: 20px" ></i></a>
								</td>
								<td><?php echo $objResult["ID_User"]; ?></td>
								<td><?php echo $objResult["FullName"]; ?></td>
								<td><?php echo $objResult["Username"]; ?></td>
								<td>************</td>
								<td><?php echo $objResult["Email"]; ?></td>
								<td><?php echo $objResult["Create_Date"]; ?></td>
							</tr>
							
							<?php 
							 } 
							?>
						</tbody>
					</table>
		
					</div>
				</div>
				<!-- /highlighting rows and columns -->

			</div>
			</form>
			<!-- /content area -->


		
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
