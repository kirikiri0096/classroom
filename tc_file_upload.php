<?php
include( "session.php" );
include( "config.php" );
?>
<head>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
	<title>upload</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		input[type=date] {
			border: solid;
			border-color: #2699FB;
		}
	</style>
</head>

<body>
	<?php
	$strSQL = "SELECT class_name FROM class WHERE class_code = '" . $ssclass . "'";
	$objQuery = mysqli_query( $objCon, $strSQL );
	$objResult = mysqli_fetch_array( $objQuery );
	$create = $objResult[ "class_name" ];

	if ( is_dir( "classroom/$create" ) ) {

	} else {
		$oldmask = umask( 0 );
		mkdir( "classroom/$create", 0777 );
		umask( $oldmask );
		//echo $create."Folder Created.<br />";
	}
	//}
	?>

	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<form name="form2" method="post" action="tc_file_upload_check.php" enctype="multipart/form-data">
		<center>
			<h1>File to Upload</h1><br>
			<input type="file" name="filUpload">
			<br><br>
			<h1>Date</h1>
			<input type="date" name="dateclass"><br>
			<input type="submit" name="btnSubmit" value="Submit">
		</center><br><br>
		</form>
	</div>

</body>
</html>