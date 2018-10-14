<?php
include( "../session.php" );
include( "../config.php" );
$strSQL = "SELECT * FROM teacher_info WHERE t_id = '" . $ssid . "' ";
$objQuery = mysqli_query( $objCon, $strSQL );
$objResult = mysqli_fetch_array( $objQuery );
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<body>
	<div id="tDiv" style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<form name="form1" method="post" action="t_profile_save.php">
			<center>
				<h1>Teacher Profile</h1>
			</center>
			<div class="row">
				<div class="col-25">
					<label for="t_id">ID:</label>
				</div>
				<div class="col-75">
					<input name="t_id" type="text" id="t_id" readonly value="<?php echo $objResult["t_id"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_fname">Firstname</label>
				</div>
				<div class="col-75">
					<input name="t_fname" type="text" id="t_fname" value="<?php echo $objResult["t_fname"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_lname">Lastname</label>
				</div>
				<div class="col-75">
					<input name="t_lname" type="text" id="t_lname" value="<?php echo $objResult["t_lname"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_tel">Telephone</label>
				</div>
				<div class="col-75">
					<input name="t_tel" type="text" id="t_tel" value="<?php echo $objResult["t_tel"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_email">Email</label>
				</div>
				<div class="col-75">
					<input name="t_email" type="text" id="t_email" value="<?php echo $objResult["t_email"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_office">Office</label>
				</div>
				<div class="col-75">
					<input name="t_office" type="text" id="t_office" value="<?php echo $objResult["t_office"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_pass">Password</label>
				</div>
				<div class="col-75">
					<input name="t_pass" type="text" id="t_pass" required>
				</div>
			</div><br>
			<input type="submit" name="Submit" value="Save"> </form><br><br>
	</div>
</body>
</html>
<?php
mysqli_close( $objCon );
?>