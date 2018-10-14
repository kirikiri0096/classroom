<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');

include("config.php");
$strSQL = "SELECT * FROM student_info WHERE std_id = '".mysqli_real_escape_string($objCon,$_POST['std_id'])."' 
	and std_pass ='".mysqli_real_escape_string($objCon,md5($_POST['std_pass']))."'";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array( $objQuery );
if ( !$objResult ) {
	echo "<script type='text/javascript'>alert('ID and Password Incorrect! please, try again'); window.location.href = 'index.php';</script>";
//	header( "Location:index.php" );
} else {
	$_SESSION["user_id"] = $_POST[ "std_id" ];
	$_SESSION["status"] = "student";
	header( "Location:std_select.php" );
}

mysqli_close( $objCon );
?>