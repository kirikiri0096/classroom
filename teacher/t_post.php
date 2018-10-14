<?
include( '../session.php' );
include( '../config.php' );
?>
<html>
<head>

	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<meta charset="utf-8">
	<title>Post Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<h1>Post Activity</h1>
			<form name="form2" method="post" action="t_post_save.php">
				<textarea name="post_info" id="post_info" autofocus="autofocus" style="height: 100px; width: 100%; resize: none; border-style: solid; border-color: #2699FB;" placeholder="Write something"></textarea>
				<br><br>
				<input name="post" type=submit value="post"></input>
			</form>
			<br><br>
	</div><br>
<?php
	$strSQL = "SELECT * FROM post WHERE class_code = '" . $ssclass . "' ORDER BY post_date DESC";
	$objQuery = mysqli_query( $objCon, $strSQL )or die( "Error Query [" . $strSQL . "]" );
	while ( $objResult = mysqli_fetch_array( $objQuery ) ) {
		$text = $objResult[ "post_info" ];
		echo("<div style='max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px; word-break:break-all;'>");
		echo("<p>" . $text . "<br><br><font size=1 style='color: #aaaaaa; float: right;'> <a href='t_editform.php?CusID=" . $objResult["post_id"] . "'>Edit</a> &nbsp" . $objResult[ "post_date" ] . "</font></p>");
		echo("");
		echo( "</div><br>" );
	}
	mysqli_close( $objCon );

?>
</body>
</html>