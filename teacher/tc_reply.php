<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teacher Reply</title>
	<style>
		html,
		body {
			margin: 0;
			font-family: Arial;
			overflow: hidden;
		}
		
		h1 {
			color: #2699FB;
			font-size: 19px;
		}
		
		div.commonEle {
			background-color: #2699FB;
			color: white;
		}
		
		div.header {
			position: fixed;
			top: 0;
			width: 100%;
			padding-top: 30px;
		}
		
		td.left {
			background-color: #2699FB;
			color: white;
			height: 30px;
			width: 40%;
			text-align: center
		}
		
		td.right {
			width: 70%;
		}
		
		input[type=text],
		input[type=email],
		input[type=password] {
			padding-left: 5px;
			height: 30px;
			width: 97%;
			border: hidden;
			font-size: 15px;
		}
		
		input[type=submit] {
			float: right;
			width: 70px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
		
		#footer {
			background-color: #2699FB;
			color: white;
			position: fixed;
			text-align: right;
			bottom: 0;
			width: 100%;
		}
	</style>
	</style>
</head>

<body>
	<?php
	ini_set( 'display_errors', 1 );
	error_reporting( ~0 );

	$strasker_id = null;
	$strask_time = null;
	$strclass_cd = null;

	if ( isset( $_GET[ "asker_id" ] )AND( $_GET[ "ask_time" ] )AND( $_GET[ "class_code" ] ) ) {
		$strasker_id = $_GET[ "asker_id" ];
		$strask_time = $_GET[ "ask_time" ];
		$strclass_cd = $_GET[ "class_code" ];
	}
	include( "../config.php" );
	$sql = "SELECT * FROM chat WHERE asker_id = '" . $strasker_id . "' AND ask_time = '" . $strask_time . "' AND class_code = '" . $strclass_cd . "'";
	$query = mysqli_query( $objCon, $sql );
	$result = mysqli_fetch_array( $query, MYSQLI_ASSOC );
	?>

	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<center>
			<br>
			<h1>
				<? echo $result[ "ask_msg" ] . $result[ "ask_time" ];
					?>
			</h1>
			</center>
			<form name="reply" method="post" action="tc_replysend.php">
				<textarea name="reply" autofocus="autofocus" style="height: 100px; width: 100%; resize: none"></textarea><br><br>
		<a href="tc_chat.php" style="color: #7FC4FD; font-size: 15px;">back</a>
		<input type="hidden" name="asker_id" value="<?php echo $strasker_id ?>">
		<input type="hidden" name="ask_time" value="<?php echo $strask_time ?>">
		<input type="hidden" name="class_code" value="<?php echo $strclass_cd ?>">
		<input type="submit" name="submit" value="reply">
		<br><br>
		</form>
	</div>
</body>
</html>