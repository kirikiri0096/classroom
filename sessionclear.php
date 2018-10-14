<?php
	include("session.php");
	include("config.php");
        $strSQL = "UPDATE enroll SET active = 0 WHERE std_id = '".$ssid."' ";
		$objQuery = mysqli_query($objCon,$strSQL);
		
	header("Location:index.php");
	session_destroy();
	mysqli_close($objCon);
?>