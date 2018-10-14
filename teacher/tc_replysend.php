<?php
	
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	include("../config.php");
	
	$sql = "UPDATE chat SET reply_time = CURRENT_TIMESTAMP + interval '7' hour , reply_msg = '".$_POST["reply"]."' WHERE chat.asker_id = '".$_POST["asker_id"]."' AND chat.ask_time = '".$_POST["ask_time"]."' AND chat.class_code = '".$_POST["class_code"]."'";
	
	echo($sql);
	
	$query = mysqli_query($objCon,$sql);

	if(!$query) {
		echo("<script>alert(\"error\")</script>");
	}
	echo ("<script>window.location.href = 'tc_chat.php';</script>");
	mysqli_close($objCon);
?>