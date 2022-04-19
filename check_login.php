<?php
	date_default_timezone_set("Asia/Bangkok");
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	if(!isset($_SESSION)){
    session_start();
	}
	
	include("conn/config.php");
	mysqli_query($objConnect, "SET NAMES UTF8");
	$datenow = date('Y-m-d');
	// echo $_POST['username'];
	// echo $_POST['password'];
	

	// $strSQL = "SELECT * FROM services_application_users WHERE username = '".mysqli_real_escape_string($objConnect, $_POST['username'])."' and password = '".mysqli_real_escape_string($objConnect,$_POST['password'])."'";
	// $objQuery = mysqli_query($objConnect,$strSQL);
	// $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	$strSQL = "SELECT * FROM User WHERE Username = '".mysqli_real_escape_string($objConnect, $_POST['username'])."' and Password = '".mysqli_real_escape_string($objConnect,$_POST['password'])."'";
	$objQuery = mysqli_query($objConnect,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	
	if(!$objResult)
	{
		    header("content-type:text/html;charset=utf-8");
			echo "<script>alert('username และ password ไม่ถูกต้อง');</script>";
			echo "<script type='text/javascript'>window.location = 'login.php';</script>";
	}
	else
	{
			$_SESSION["id_end"] = $objResult["FullName"];

			echo "<script type='text/javascript'>window.location = 'login.php';</script>";
				session_write_close();

			// if($objResult["Type_user"] == 'admin'){

				header("location:list_Member.php");
			
			/*}elseif($objResult["hierachy_name"] == 'survey_man'){
				
				if($objResult["end_date"] < $datenow){
					
					header("content-type:text/html;charset=utf-8");
					echo "<script>alert('username นี้หมดอายุการใช้งาน');</script>";
					echo "<script type='text/javascript'>window.location = 'login_operatinal.php';</script>";
					
				}else{
				
					header("location:list_record_survey.php?id=".$_GET["id"]);
					
				}
				
			}else{
				
				if($objResult["end_date"] < $datenow){
					
					header("content-type:text/html;charset=utf-8");
					echo "<script>alert('username นี้หมดอายุการใช้งาน');</script>";
					echo "<script type='text/javascript'>window.location = 'login_operatinal.php';</script>";
					
				}else{
				
				header("location:list_install_device.php");
				
				}
				
			}*/
			//header("location:index.php");
				

	}
	mysqli_close($objConnect);
	
?>