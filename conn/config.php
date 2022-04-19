<?php
    if (!session_id()) session_start();
	// $serverName = "localhost";
    // $userName = "uhmonlines_svs";
    // $userPassword = "0FIMvxLezC";
	// $dbName = "uhmonlines_svs";
	$serverName = "localhost";
    $userName = "root";
    $userPassword = "";
	$dbName = "Member";
  
	$objConnect = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_query($objConnect, "SET NAMES UTF8");

	/*-------------- header-page check_in,check_out ---------------*/
	//$strSQL1 = "SELECT DISTINCT t2.Place_name,t1.`Ass_service_no`,t2.`Service_no`,t2.`Division_code`,t2.`Sales_name`,t2.`Assign_Time`,t2.`Contact_Telephone`,t2.`ass_service_no`,t1.`Employee_name_1`,t1.`Assign_date`,t1.`Status` FROM `assign_service_request_header` t1 JOIN `assign_service_requrst_number`t2 ON t2.`ass_service_no` = t1.`Ass_service_no`";
	//$objQuery1 = mysqli_query($objConnect,$strSQL1);
	//$objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
	//$_POST["ass"] = $objResult1["Ass_service_no"];

	// $SQL = "SELECT * FROM services_application_users WHERE fullname = '".$_SESSION["id_uhm"]."'";
	// $query = mysqli_query($objConnect,$SQL);
	// $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	// $_SESSION["id_uhm"] = $result["fullname"];
	
	
	if(!$_SESSION["id_end"]){

	}else{
		$SQL = "SELECT * FROM User WHERE FullName = '".$_SESSION["id_end"]."'";
		$query = mysqli_query($objConnect,$SQL);
		$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
		$_SESSION["id_end"] = $result["FullName"];

	}
?>
