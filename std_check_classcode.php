<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

include("config.php");
$strSQL = "SELECT class_code FROM class WHERE class_code = '".mysqli_real_escape_string($objCon,$_POST["classcode"])."'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array( $objQuery );
if ( !$objResult ) {
	echo "<script type='text/javascript'>alert('Class code Incorrect! please, try again'); 	window.location.href = 'std_select.php';</script>";
//	header( "Location:index.php" );
} else {
	$strSQL = "INSERT INTO enroll(std_id,class_code,act_time) VALUES ('".$_SESSION["user_id"]."','".$_POST["classcode"]."',Now() + interval '7' hour)";
	$objQuery = mysqli_query( $objCon, $strSQL );
	echo "<script type='text/javascript'>alert('Class code correct! '); window.location.href = 'std_select.php';</script>";

	
}

mysqli_close( $objCon );
?>