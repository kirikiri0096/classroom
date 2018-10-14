<?php
include( "../session.php" );
include("../config.php");
	$strSQL = "UPDATE teacher_info SET t_fname = '".trim($_POST['t_fname'])."',t_lname = '".trim($_POST['t_lname'])."',t_tel = '".trim($_POST['t_tel'])."',t_pass = '".trim(md5($_POST['t_pass']))."',t_email ='".trim($_POST['t_email'])."',t_office ='".trim($_POST['t_office'])."' WHERE t_id = '".$ssid."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	if($objQuery){
		echo ("<script>alert('Saved'); window.location.href = 't_profile_edit.php';</script>");
	}
	else {
		echo ("<script>alert('Cannot apply changed'); window.location.href = 't_profile_edit.php';</script>");
	}
mysqli_close($objCon);

?>
