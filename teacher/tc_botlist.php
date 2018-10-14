<?
include( "../session.php" );
include( "../config.php" );
?>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Bot Manage</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		input[type=submit] {
			float: right;
			width: 90px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
		input[type=submit]:hover {
			background-color: #BCE0FD;
		}
		a {
			text-decoration: none;
		}
	</style>
</head>

<body>
	<?php

	$strSql = "SELECT chatbot_q.q_msg AS qst_msg,chatbot_q.a_id AS ans_id, chatbot_a.a_msg AS ans_msg, chatbot_a.class_id AS class_id FROM chatbot_q LEFT JOIN chatbot_a ON chatbot_q.a_id = chatbot_a.a_id WHERE class_id='" . $ssclass . "'";

	$objQuery = mysqli_query( $objCon, $strSql );
	$check = 000;
	//mysqli_close($objCon);
	?>

	<div style="position: fixed; top: 5; right: 5;"><a href="tc_chat.php" style="font-size: 40px;"><span class="close">&times;</span></a></div>
	</div>
	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<form method="post" action="tc_botadd.php">
			<center>
				<h1>Bot Manager</h1>
			</center>
			<input type="hidden" name="class_code" value="<?php echo $ssclass ?>">
			<center>Answer: </center>
			<div class="row">
				<div class="col-25">
					<label for="std_id">A:</label>
				</div>
				<div class="col-75">
					<input type="text" name="a_msg" placeholder="Your Answer" required>
				</div>
			</div><br>
			<center>Question: </center>
			<div class="row">
				<div class="col-25">
					<label for="std_id">Q1:</label>
				</div>
				<div class="col-75">
					<input type="text" name="q_msg_1" placeholder="Question 1" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_id">Q2:</label>
				</div>
				<div class="col-75">
					<input type="text" name="q_msg_2" placeholder="Question 2">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_id">Q3:</label>
				</div>
				<div class="col-75">
					<input type="text" name="q_msg_3" placeholder="Question 3">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_id">Q4:</label>
				</div>
				<div class="col-75">
					<input type="text" name="q_msg_4" placeholder="Question 4">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_id">Q5:</label>
				</div>
				<div class="col-75">
					<input type="text" name="q_msg_5" placeholder="Question 5">
				</div>
			</div><br>
			<input type="submit" value="ADD BOT"><br>
		</form>
	</div>
	<div style="max-width: 300px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<?
			while ( $objresult = mysqli_fetch_array( $objQuery ) ) {
				if ( $check !== $objresult[ "ans_id" ] ) {
					$check = $objresult[ "ans_id" ];
		?>
		<form method="post" action="tc_botdel.php">
			<br>
			<div class="commonEle" style="height: 30px">A :
				<?php echo $objresult["ans_msg"]; ?>
				<input type="hidden" name="a_id" value="<?php echo $objresult["ans_id"]; ?>">
				<input type="submit" value="DELETE BOT" style="float: right;">
			</div>
			<div>
		</form>
		<?php 
		}
		echo "Q : ".$objresult["qst_msg"]."<BR>";
	}
	echo "</div>"
		?>

		</div>
	</div>
</body>
</html>