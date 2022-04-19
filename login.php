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
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->
	
	<!-- ใส่รูป -->
	<link rel="shortcut icon" href="global_assets/images/T121_mini.png" />

</head>

<body>

	<!-- Main navbar -->
	
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form" method="post" action="check_login.php">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
							<img src="global_assets/images/logo_dark.png" alt=""><br><br>
								<span class="d-block text-muted">ระบบจัดการสมาชิก</span>
								<!-- <span class="d-block text-muted">กรุณากรอกชื่อผู้ใช้ และรหัสผ่าน</span>
								<span class="d-block text-muted">เพื่อเข้าสู่ระบบการใช้งาน</span> -->
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" id="username" name="username" class="form-control" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" id="password" name="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Login <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="form-group">
								<a href="RegisterNew.php" class="btn btn-success btn-block">Register <i class="icon-user-plus"></i></a>
							</div>

							<div class="text-center">
								<!--<a href="login_password_recover.html">ลืมรหัสผ่าน</a>-->
								<!--<a href="forget_Password.php">Forgot Password</a>-->
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->

			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
