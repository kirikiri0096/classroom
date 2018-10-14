<?php
	header("Location: std_chat.php");
?>
<html>
<head>
<title>hmm?</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include("../config.php");
	
	$sql = "DELETE FROM chat WHERE chat.asker_id = ".$_POST["asker_id"]." AND chat.ask_time = '".$_POST["ask_time"]."' AND chat.class_code ='".$_POST["class_code"]."' ";

	$query = mysqli_query($objCon,$sql);

	if($query) {
		echo "Record DELETE successfully";
	}else {
    	echo "Error deleting record: " . $objCon->error;
	}

	mysqli_close($objCon);
?>
</body>
</html>