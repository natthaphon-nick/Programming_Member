<?php
  date_default_timezone_set("Asia/Bangkok");
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	if(!isset($_SESSION)){
    session_start();
	}
 
	include("conn/config.php");
	mysqli_query($objConnect, "SET NAME UTF8");

	
	$Start_key_in_date = date("Y-m-d H:i:s");
	$datestart = date('Y-m-d');
	
	$strSQL5 = "SELECT * FROM User WHERE FullName = '".$_SESSION["id_end"]."' ";
	$objQuery5 = mysqli_query($objConnect,$strSQL5);
	$objResultlog = mysqli_fetch_array($objQuery5,MYSQLI_ASSOC);
	
	
		$strSQL = "INSERT INTO User (Username,Password,FullName,Email,Create_Date) VALUES
		('".$_POST["username"]."', '".$_POST["password"]."','".$_POST["fullname"]."','".$_POST["email"]."','$datestart')";
		$objQuery = mysqli_query($objConnect,$strSQL);
		header("content-type:text/html;charset=utf-8");
				echo "<script>alert('สมัครสมาชิกเรียบร้อย');</script>";
				echo "<script type='text/javascript'>window.location = 'list_Member.php';</script>";
		
		/*$objResult = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);*/
		
				$_SESSION["email"] = $_POST["email"];
			//	header("location:list_register.php");
		// echo 	$_POST["hierachy_name"]." ".$_POST["username"]." ".$_POST["password"]." ".$_POST["fullname"]." ".$_POST["email"]." ".$_POST["telephone"]; 
	
		mysqli_close($objConnect);

?>