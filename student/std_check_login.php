<html>
<body>
<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
    include("config.php");
	$strSQL = "SELECT * FROM Student_Info WHERE std_id = '".mysqli_real_escape_string($objCon,$_POST['std_id'])."' 
	and std_pass = '".mysqli_real_escape_string($objCon,md5($_POST['std_pass']))."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "ID and Password Incorrect!";
		echo "<br><a href='index.php'>back</a>";
	}
	else
	{
        $_SESSION['user_id'] =$_POST['std_id'];
        $strSQL = "UPDATE Student_Info SET std_active = 1
		 WHERE std_id = '".$_SESSION["user_id"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);
		header("Location:index1.php");
	}
			
	mysqli_close($objCon);
?>				
</body>
</html>