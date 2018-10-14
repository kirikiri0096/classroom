<?
include( "../session.php" );
include( "../config.php" );
?>
<html>
<head>
	<title>Teacher Chat</title>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		.navbar {
			overflow: hidden;
			background-color: #333;
			position: fixed;
			bottom: 0;
			width: 100%;
		}
		
		.navbar a {
			float: right;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}
		
		.navbar a:hover {
			background: #f1f1f1;
			color: black;
		}
		
		.navbar a.active {
			background-color: #4CAF50;
			color: white;
		}
		
		span {
			display: inline-block;
			max-width: 50%;
			background-color: #F1F9FF;
			padding: 10px;
			border-radius: 10px;
			position: relative;
			border-width: 1px;
			border-style: solid;
			border-color: white;
			word-break: break-all;
		}
		
		left {
			float: left;
		}
		
		span.left:after {
			content: "";
			display: inline-block;
			position: absolute;
			left: -8.5px;
			top: 7px;
			height: 0px;
			width: 0px;
			border-top: 8px solid transparent;
			border-bottom: 8px solid transparent;
			border-right: 8px solid #F1F9FF;
		}
		
		span.left:before {
			content: "";
			display: inline-block;
			position: absolute;
			left: -9px;
			top: 7px;
			height: 0px;
			width: 0px;
			border-top: 8px solid transparent;
			border-bottom: 8px solid transparent;
			border-right: 8px solid #F1F9FF;
		}
		
		span.right {
			float: right;
			background-color: #2699FB;
			color: white;
		}
		
		.clear {
			clear: both;
		}
		
		a {
			text-decoration: none;
			color: white;
		}
		
	</style>
	</style>
</head>

<body>
	<?php


	$objQuery = mysqli_query( $objCon, "SELECT * FROM chat WHERE class_code='" . $ssclass . "' ORDER BY ask_time" );

	while ( $objResult = mysqli_fetch_array( $objQuery ) ) {
		echo "<span class='left'>";
		echo $objResult[ "asker_id" ] . " said: <br>" . $objResult[ "ask_msg" ] . "<font size=1><br>Time : " . $objResult[ "ask_time" ] . "</font>";
		echo "</span><div class='clear'>";
		if ( $objResult[ "reply_msg" ] !== NULL ) {
			echo( "<span class='right'>" );
			echo $objResult[ "reply_msg" ] . "<font size=1><br>Time : " . $objResult[ "reply_time" ] . "</font>";
			echo "</span><div class='clear'>";
		} else {
			echo( "<span class='right' style=\"border: solid; border-color: red;\"><a href=\"tc_reply.php?asker_id=" . $objResult[ "asker_id" ] . "&&ask_time=" . $objResult[ "ask_time" ] . "&&class_code=" . $objResult[ "class_code" ] . "\">Reply NOW!</a></span><div class='clear'>" );
		}
	}
	mysqli_close( $objCon );
	?>
	<div id="bottom" style="height: 20px"></div>
	<div style="position: fixed; bottom: 5; left: 5;"><a href="tc_botlist.php"><img src="../img/ico/setting.png" height="4%"></a></div>
	<script>
		function bottom() {
			document.getElementById( 'bottom' ).scrollIntoView();
		};
		bottom();
	</script>

</body>
</html>