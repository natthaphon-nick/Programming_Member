<?php
include("conn/config.php");
mysqli_query($objConnect, "SET NAME UTF8");

$id = $_GET["id"];
$strSQL = "SELECT * FROM User WHERE ID_User = '".$_GET["id"]."'";
$objQuery = mysqli_query($objConnect,$strSQL);
$objResulth = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
//echo $survey_no;
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
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>

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
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Registration form -->
				<form action="Update_User.php?id=<?=$objResulth["ID_User"]?>" class="flex-fill" name="form1" method="post">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="card mb-0">
								<div class="card-body">
									<div class="text-center mb-3">
										<i class="icon-user icon-2x text-primary border-primary border-3 rounded-round p-3 mb-3 mt-1"></i>
										<h5 class="mb-0">เเก้ไขผู้ใช้งาน</h5>
										<span class="d-block text-muted">กรุณากรอกข้อมูลให้ครบทุกช่อง</span>
									</div>

									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control" id="fullname" name="fullname" placeholder="ชื่อ - นามสกุล" value="<?php echo $objResulth["FullName"];?>">
										<div class="form-control-feedback">
											<i class="icon-user-plus text-muted"></i>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<input type="text" class="form-control" readonly id="username" name="username" placeholder="ชื่อผู้ใช้ระบบ" onblur="check_user(this.id, 'add')" value="<?php echo $objResulth["Username"];?>">
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="email" class="form-control" id="email" name="email" onblur="check_email(this.id, 'add')" placeholder="อีเมล์" value="<?php echo $objResulth["Email"];?>">
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" onchange="checkPwd(this.id, $('#password').attr('id'))" value="<?php echo $objResulth["Password"];?>">
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" class="form-control" id="conpassword" name="conpassword" onchange="checkPwd2(this.id, $('#password').attr('id'))" placeholder="ยืนยันรหัสผ่าน" value="<?php echo $objResulth["Password"];?>">
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>


									<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right" name="btnSave" id="btnSave" ><b><i class="icon-plus3"></i></b> บันทึกข้อมูล</button>
								    <button type="button" class="btn bg-danger-400 btn-labeled btn-labeled-right" name="btnback" id="btnBack" onclick="location.href='list_Member.php';"><b><i class="icon-reset"></i></b>กลับสู่หน้าจอหลัก</button>
								
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- /registration form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	

	
	<script type="text/javascript">
$(function(){
 $("#btnSave").click(function(){
		if($("#username").val() =="" || $("#password").val() =="" || $("#fullname").val() =="" || $("#email").val() =="" || $("#telephone").val() =="" || $("#job_position").val() ==""){
			alert("กรุณาใส่ข้อมูลที่จำเป็นให้ครบ");
			return false;
		}
	});
});

function checkPwd(id){
	var Pwd = $("#"+id).val();
	if(Pwd.length < 6){
		alert("กรุณากรอกรหัสผ่านที่ไม่ต่ำกว่า 6 ตัวอักษร");
		$("#"+id).addClass("errTextbox");
		return false;
	}
	else{
		$("#"+id).removeClass("errTextbox");
		return true;
	}
}
function checkPwd2(id2, id){
	if($("#"+id).val() != $("#"+id2).val()){
		alert("ขออภัย รหัสผ่านไม่ตรงกัน");
		$("#"+id2).addClass("errTextbox");
		return false;
	}
	else{
		$("#"+id2).removeClass("errTextbox");
		return true;
	}
}

function check_email(id, type){
	var email = $("#"+id).val();
	var flag;
	if(email == ''){
		$("#"+id).addClass("errTextbox");
		flag = false;
	}
	else{
		if (email.search(/^\w+((-\w+)|(\.\w+))*@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1){
			if(type == ''){
				$("#"+id).removeClass("errTextbox");
				$("#"+id).addClass("rigTextbox");
				flag = true;
			}
			else{
				var postdata;
				if(type=="edit")
					postdata = "type=edit&email=" + email + "&AppID=";				
				else
					postdata = "type=add&email=" + email;				
				$.ajax({
					url: "check_email.php",
					data: postdata,
					type: "POST",
					async: false,
					error: function(xhr, status, exception) { alert("ERROR: " + status + exception); },
					success: function(data, status) {
							console.log(data);
						if(data!=""){
							$("#"+id).addClass("errTextbox");
							alert("ขออภัย อีเมล์นี้ถูกใช้สมัครไปแล้ว");
							flag = false;
							document.getElementById('email').value = "";
						}
						else{
							$("#"+id).removeClass("errTextbox");
							$("#"+id).addClass("rigTextbox");
							flag = true;
						}
					}
				});
			}
		}
		else{
			$("#"+id).addClass("errTextbox");
			alert("อีเมล์ไม่ถูกต้อง"+ type + email);
			flag = false;
		}
	}
	return flag;
}

function checkPhone(id){
	var mobile = $("#"+id).val();
	if(mobile.length != 10){
		alert("กรุณากรอกหมายเลขโทรศัพท์ 10 หลัก ด้วยรูปแบบดังนี้ 08XXXXXXXX ไม่ต้องใส่เครื่องหมายขีด (-) วงเล็บหรือเว้นวรรค");
		$("#"+id).addClass("errTextbox");
		return false;
	}else{
		$("#"+id).removeClass("errTextbox");
		return true;
	}
}


function check_user(id, type){
	var username = $("#"+id).val();
	var flag2;

				var postdata2;
					postdata2 = "type=add&username=" + username;				
				$.ajax({
					url: "check_user.php",
					data: postdata2,
					type: "POST",
					async: false,
					error: function(xhr, status, exception) { alert("ERROR: " + status + exception); },
					success: function(data, status) {
							console.log(data);
						if(data!=""){
							$("#"+id).addClass("errTextbox");
							alert("ขออภัย ชื่อนี้ถูกใช้งานไปแล้ว");
							flag2 = false;
							document.getElementById('username').value = "";
						}
						else{
							$("#"+id).removeClass("errTextbox");
							$("#"+id).addClass("rigTextbox");
							flag2 = true;
						}
					}
				});


	return flag2;
}	
</script>	

</body>
</html>
