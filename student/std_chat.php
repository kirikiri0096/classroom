<?
include( "../session.php" );
include( "../config.php" );
?>
<html>
<head>
	<title>Student Chat</title>
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
		
		span.right:after {
			content: "";
			display: inline-block;
			position: absolute;
			right: 0px;
			top: 6px;
			height: 0px;
			width: 0px;
			border-top: 8px solid transparent;
			border-bottom: 8px solid transparent;
			border-left: 8px solid #2699FB;
		}
		
		span.right:before {
			content: "";
			display: inline-block;
			position: absolute;
			right: 1px;
			top: 6px;
			height: 0px;
			width: 0px;
			border-top: 8px solid transparent;
			border-bottom: 8px solid transparent;
			border-left: 8px solid #2699FB;
		}
		
		span.right {
			float: right;
			background-color: #2699FB;
			color: white;
		}
		
		.clear {
			clear: both;
		}
	</style>
</head>

<body>
	<?php
	$strsql = ( "SELECT chatbot_q.q_msg AS qst_msg, chatbot_a.class_id AS class_id FROM chatbot_q LEFT JOIN chatbot_a ON chatbot_q.a_id = chatbot_a.a_id WHERE class_id='" . $ssclass . "'" );
	$suggest = mysqli_query( $objCon, $strsql );
	?>
	<h1>
		<?php echo $ssid." 's Chat" ?>
	</h1>
		<?php
		$objQuery = mysqli_query($objCon,"SELECT * FROM chat WHERE asker_id = '". $ssid ."' AND class_code ='" . $ssclass ."'");
		while ($objResult = mysqli_fetch_array($objQuery)) {
			?>

		<form style="margin: 0" method="post" name="unsent" action="std_unsent.php">
			<span class="right">
				<?php echo $objResult["ask_msg"] ."<font size=1><br>Time : ". $objResult["ask_time"]."</font>";?>
				<input type="hidden" name="asker_id" value="<?php echo $objResult["asker_id"] ?>">
				<input type="hidden" name="ask_time" value="<?php echo $objResult["ask_time"] ?>">
				<input type="hidden" name="class_code" value="<?php echo $objResult["class_code"] ?>">
				<input type="submit" name="submit" value="unsent">
			</span>
		</form>
		<div class="clear"></div>


		<?php
		if ( $objResult[ "reply_msg" ] !== NULL ) {
			echo( "<span class='left'>" );
			echo $objResult[ "reply_msg" ] . "<font size=1><br>Time : " . $objResult[ "reply_time" ] . "</font>";
			echo "</span>";
		} else {
			echo( "<span style='color: #aaaaaa;'>Wait your teacher to reply</span><div class='clear'></div>" );
		}
		}
		mysqli_close( $objCon );
		?>


	<form name="send" method="post" action="std_chatsend.php">
		<div class="navbar" id="footer">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td width="100%"><input type="text" name="msg" style="width: 100%; height: 100%" autofocus="autofocus" list="botsuggest">
					</td>
					<input type="hidden" name="asker_id" value="<?php echo $ssid ?>">
					<input type="hidden" name="class_code" value="<?php echo $ssclass ?>">
					<td><input type="submit" name="submit" value="submit">
					</td>
				</tr>
			</table>
			<datalist id="botsuggest">
				<?php
				while ( $sgresult = mysqli_fetch_array( $suggest ) )
					echo "<option value= '" . $sgresult[ "qst_msg" ] . "'>BOT Suggestion</option>";
				?>
			</datalist>
		</div>
	</form>

	<div id="bottom" style="height: 15px"></div>
	<script>
		function bottom() {
			document.getElementById( 'bottom' ).scrollIntoView();
		};
		bottom();
	</script>



</body>
</html>