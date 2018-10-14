<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		input[type=number] {
			padding-left: 5px;
			height: 36px;
			width: 100%;
			border: solid;
			color: #2699FB;
			font-size: 15px;
		}
	</style>
</head>

<body>
	<?php
	include( "../session.php" );
	include( "../config.php" );
	$strSQL = "SELECT std_id FROM enroll WHERE active = 1 AND `class_code` = '" . $ssclass . "'";
	$objQuery = mysqli_query( $objCon, $strSQL );
	$student = 0;
	if ( mysqli_num_rows( $objQuery ) ) {
			while ($objResult = mysqli_fetch_array($objQuery)) {
//		 		echo $objResult["std_id"]."<br>";
				$student++;
		 } 
	} else {
		echo "<script>alert('No Student');</script>";
	}
	?>
	<br/>

	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<form action="tc_rand.php" method="post">
			<input type="hidden" name="rand_all" value="<? echo $student; ?>"/>
			<input type="radio" name="rand_mode" value="1"/>mode 1: by member
			<br/><br><input name="rand_max" type="number" placeholder="Max Student per group"/>


			<br/><br/><input type="radio" name="rand_mode" value="2"/>mode 2: by group
			<br/><br><input name="rand_amount" type="number" placeholder="Number of group"/>
			<br/><br><input type="submit" value="Submit"/><br>
		</form>
	</div>

	<? mysqli_close($objCon); ?>
</body>
</html>