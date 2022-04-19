<?php
	date_default_timezone_set("Asia/Bangkok");
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	if(!isset($_SESSION)){
    session_start();
	}
 
	include("conn/config.php");
	$Start_key_in_date = date("Y-m-d H:i:s");
	mysqli_query($objConnect, "SET NAMES UTF8");
	
	$strSQL = "SELECT * FROM User WHERE ID_User = '".$_GET["id"]."'";
	$objQuery = mysqli_query($objConnect,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

		
		$strSQL1 = "DELETE FROM User
		WHERE ID_User = '".$_GET["id"]."'";
		$objQuery1 = mysqli_query($objConnect,$strSQL1);
		//$objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
				
				/*session_write_close();*/
				header("content-type:text/html;charset=utf-8");
				echo "<script>alert('คุณได้ลบข้อมูลเรียบร้อยแล้ว');</script>";
				echo "<script type='text/javascript'>window.location = 'list_Member.php';</script>";

				/*header("location:Thank_you.php");*/
				/*header("location:index.php");*/

	
	mysqli_close($objConnect);
?>