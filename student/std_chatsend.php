<?php
	header("Location: std_chat.php");
	ini_set('display_errors', 1);
	error_reporting(~0);
	include("../config.php");
	$chksql = mysqli_query($objCon,"SELECT chatbot_q.q_msg AS qst_msg,chatbot_q.a_id AS ans_id, chatbot_a.a_msg AS ans_msg, chatbot_a.class_id AS class_id FROM chatbot_q LEFT JOIN chatbot_a ON chatbot_q.a_id = chatbot_a.a_id WHERE class_id = '".$_POST["class_code"]."'");
	
	$found = "";
	while($find = mysqli_fetch_array($chksql)){
		if($find["qst_msg"]==$_POST["msg"])
			$found=$find["ans_msg"];	
	}
	if($found!=""){
		mysqli_query($objCon,"INSERT INTO chat (asker_id, ask_time, ask_msg, reply_time, reply_msg, class_code) VALUES ('".$_POST["asker_id"]."',CURRENT_TIMESTAMP + interval '7' hour,'".$_POST["msg"]."',CURRENT_TIMESTAMP + interval '7' hour,'&#91;BOT Said&#93; ".$found."','".$_POST["class_code"]."')");
		echo("BOT Replied");
	}else{
		mysqli_query($objCon,"INSERT INTO chat (asker_id, ask_time, ask_msg, class_code) VALUES ('".$_POST["asker_id"]."',CURRENT_TIMESTAMP + interval '7' hour,'".$_POST["msg"]."','".$_POST["class_code"]."')");
		echo("NO Reply");
	}
	

	mysqli_close($objCon);
?>