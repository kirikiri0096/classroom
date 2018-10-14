<?php
include( "session.php" );
include( "config.php" );
$strSQL = "SELECT files.FilesName AS FilesName, files.Date AS Date, class.class_name AS ClassName FROM files 
			LEFT JOIN class ON class.class_code = files.class_code
			WHERE files.class_code = '" . $ssclass . "'";
$objQuery = mysqli_query( $objCon, $strSQL );
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<table border='1' cellspacing='0px' width='100%' bordercolor='#7FC4FD' id='fileList'>
		<tr>
			<td>File Name</td>
			<td>Date</td>
		</tr>
	<?php
		while ( $objResult = mysqli_fetch_array( $objQuery ) ) {
			echo("<tr>
					<td><a href='classroom/".$objResult['ClassName']."/".$objResult['FilesName']."'>{$objResult["FilesName"]}</a>
					</td>
					<td>{$objResult['Date']}
					</td>
					</tr>");
	}
	mysqli_close( $objCon );
	?>
</body>
</html>