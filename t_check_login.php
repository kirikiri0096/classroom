<?php
	
	session_start();
	include("config.php");

	$strSQL = "SELECT * FROM teacher_info WHERE t_id = '".mysqli_real_escape_string($objCon,$_POST['t_id'])."'
	and t_pass = '".mysqli_real_escape_string($objCon,md5($_POST['t_pass']))."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<script type='text/javascript'>alert('ID and Password Incorrect! please, try again'); window.location.href = 'index.php';</script>";
	}
	else
	{
       $_SESSION["user_id"] = $_POST["t_id"];
       $_SESSION["status"] = "teacher";
		header("Location:t_select.php");
	}
			
	mysqli_close($objCon);
?>				