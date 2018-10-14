<?php
	header("Location: tc_botlist.php");
	include("../config.php");
	echo("INSERT INTO chatbot_a (a_msg,class_id) VALUES ('".$_POST["a_msg"]."','".$_POST["class_code"]."')");
	if($_POST["a_msg"]!=""){
		mysqli_query($objCon,"INSERT INTO chatbot_a (a_msg,class_id) VALUES ('".$_POST["a_msg"]."','".$_POST["class_code"]."')");
		$last_id = mysqli_insert_id($objCon);
		$q_msg=array($_POST["q_msg_1"],$_POST["q_msg_2"],$_POST["q_msg_3"],$_POST["q_msg_4"],$_POST["q_msg_5"]);
		foreach($q_msg as $msg){
			echo($msg);
			if($msg!=""){
				mysqli_query($objCon,"INSERT INTO chatbot_q (q_msg,a_id) VALUES ('".$msg."',".$last_id.")");
			}
		}
	}
	mysqli_close($objCon);
?>