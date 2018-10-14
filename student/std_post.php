<?php
include( '../session.php' );
?>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<meta charset="utf-8">
	<title>Post Page</title>
</head>

<body>
	<?php
	include( '../config.php' );
	$strSQL = "SELECT * FROM post WHERE class_code = '" . $ssclass . "' ORDER BY post_date DESC";
	$objQuery = mysqli_query( $objCon, $strSQL );
	while ( $objResult = mysqli_fetch_array( $objQuery ) ) {

		echo("<div style='max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px; word-break:break-all;'>");
		echo "<p>" . $objResult[ "post_info" ] . "<br><br><font size=1 style='color: #aaaaaa; float: right;'>" . $objResult[ "post_date" ] . "</font></p>";
		echo( "</div><br>" );

	}


	mysqli_close( $objCon );
	?>
</body>
</html>