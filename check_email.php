<?php
ini_set('display_errors', 1);
	error_reporting(~0);
	
	if(!isset($_SESSION)){
    session_start();
	}
 
	include("conn/config.php");
	
	$email = "SELECT * FROM employee WHERE email = '".trim($_POST['email'])."' ";
	$Query = mysqli_query($objConnect,$email);
	$Result = mysqli_fetch_array($Query,MYSQLI_ASSOC);
	if($Result)
	{
			echo "Email already exists!";
	}

/*$email = isset($_POST['Email']) ? trim($_POST['Email']) : "";
$Query = mysqli_query("SELECT * FROM member WHERE Email='{$email}'");
$Rows = mysqli_query($objConnect,$strSQL);
if($Rows == 1){
    echo "1";
}*/

?>