<?php
	header("Location: tc_botlist.php");
	include("../config.php");
	mysqli_query($objCon,"DELETE FROM chatbot_a WHERE a_id = ".$_POST["a_id"]."");
	mysqli_query($objCon,"DELETE FROM chatbot_q WHERE a_id = ".$_POST["a_id"]."");
	echo($_POST["a_id"]);
	mysqli_close($objCon);
?>