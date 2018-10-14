<?php
	include("session.php");
	include("config.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>check</title>
</head>

<body>
<?php
	
	$strSQL = "SELECT class_name FROM class WHERE class_code = '".$ssclass."'" ;
	$objQuery = mysqli_query( $objCon, $strSQL );
	$objResult = mysqli_fetch_array( $objQuery );
	
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"classroom/". $objResult["class_name"]."/".$_FILES["filUpload"]["name"]))
		{
			echo "Upload Complete<br>";
			


			//*****Insert Record****///
			$strSQL2 = "INSERT INTO files (FilesName, Date,class_code) VALUES ('".$_FILES["filUpload"]["name"]."','".$_POST["dateclass"]."','".$ssclass."')";
			if(!mysqli_query($objCon,$strSQL2)){
    			die('Error:'.mysqli_error($objCon));
   			}
		}
	?>
<?php
mysqli_close($objCon);
?>
<a href="tc_file_list.php">View files</a>
</body>
</html>