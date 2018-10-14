<?php
include( "../session.php" );
include("../config.php");
	$strSQL = "UPDATE student_info SET std_fname = '".trim($_POST['std_fname'])."',std_lname = '".trim($_POST['std_lname'])."',std_pass = '".trim(md5($_POST['std_pass']))."',std_email = '".trim($_POST['std_email'])."' WHERE std_id = '".$ssid."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	if($objQuery){
		echo ("<script>alert('Saved'); window.location.href = 'edit_profile_std.php';</script>");
	}
	else {
		echo ("<script>alert('Cannot apply changed'); window.location.href = 'std_edit_profile.php';</script>");
	}
	
mysqli_close($objCon);

?>
