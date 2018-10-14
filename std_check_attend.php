<? include("session.php");
header('Content-Type: text/html; charset=utf-8');
	
	include("config.php");
	$strSQL = "SELECT class_attend FROM class WHERE class_code = '".mysqli_real_escape_string($objCon,$ssclass)."' 
	AND class_attend = '".mysqli_real_escape_string($objCon,$_POST["code"])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<script>alert('Code incorrect'); window.location.href = 'student/index.php'; </script>";
	}
	else
	{
        $strSQL = "UPDATE enroll SET active = 1,act_time = Now() + interval '7' hour
		 WHERE std_id = '".$ssid."'AND class_code = '".$ssclass."'";
		$objQuery = mysqli_query($objCon,$strSQL);
		header("Location:student/index.php");
	}
			
	mysqli_close($objCon);
	
?>
