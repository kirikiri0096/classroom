<?php
include( "../config.php" );
include( "../session.php" );
$strSQL = "SELECT * FROM student_info WHERE std_id = '" . $ssid . "' ";
$objQuery = mysqli_query( $objCon, $strSQL );
$objResult = mysqli_fetch_array( $objQuery );
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		@media screen and (min-width: 1280px) {
			#stdDiv {
				position: fixed;
				width: 500px; 
				left: 10%;
				top: 10%;
			}
			#tDiv {
				position: fixed;
				width: 500px; 
				right: 10%;
				top: 10%;
			}
		}
	</style>
</head>

<body>
	<div id="stdDiv" style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<center><br>
			<h1>Edit profile</h1>
		</center><br>
		<form name="form1" method="post" action="std_save_profile.php">
			<div class="row">
				<div class="col-25">
					<label for="std_id">ID:</label>
				</div>
				<div class="col-75">

					<input name="std_id" type="text" id="std_id" placeholder="Student ID (8 digits)" readonly value="<?php echo $objResult["std_id"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_fname">Firstname</label>
				</div>
				<div class="col-75" style="height: 42px;">
					<input name="std_fname" type="text" id="std_fname" value="<?php echo $objResult["std_fname"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_lname">Lastname</label>
				</div>
				<div class="col-75" style="height: 42px;">
					<input name="std_lname" type="text" id="std_lname" value="<?php echo $objResult["std_lname"];?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_pass">Password</label>
				</div>
				<div class="col-75" style="height: 42px;">
					<input name="std_pass" type="password" id="std_pass" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_email">Email</label>
				</div>
				<div class="col-75" style="height: 42px;">
					<input name="std_email" type="email" id="std_email" value="<?php echo $objResult["std_email"];?>">
				</div>
			</div><br>
			<input type="submit" name="Submit" value="Save"> <br>
		</form>
	</div>
</body>
<?php
$strSQL = "SELECT t_id FROM class WHERE class_code = '" . $ssclass . "' ";
$objQuery = mysqli_query( $objCon, $strSQL );
$objResult = mysqli_fetch_array( $objQuery );
$strSQL1 = "SELECT * FROM teacher_info WHERE t_id = '" . $objResult[ 't_id' ] . "'";
$objQuery1 = mysqli_query( $objCon, $strSQL1 );
$objResult1 = mysqli_fetch_array( $objQuery1 );
?>

<body>
	<div id="tDiv" style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<center><h1>Teacher Profile</h1></center>
		<div class="row">
			<div class="col-25">
				<label for="t_id">ID:</label>
			</div>
			<div class="col-75">
				<input name="t_id" type="text" id="t_id" readonly value="<?php echo $objResult1["t_id"];?>">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="t_fname">Firstname</label>
			</div>
			<div class="col-75">
				<input name="t_fname" type="text" id="t_fname" readonly value="<?php echo $objResult1["t_fname"];?>">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="t_lname">Lastname</label>
			</div>
			<div class="col-75">
				<input name="t_lname" type="text" id="t_lname" readonly value="<?php echo $objResult1["t_lname"];?>">
			</div>
		</div><div class="row">
			<div class="col-25">
				<label for="t_tel">Telephone</label>
			</div>
			<div class="col-75">
				<input name="t_tel" type="text" id="t_tel" readonly value="<?php echo $objResult1["t_tel"];?>">
			</div>
		</div><div class="row">
			<div class="col-25">
				<label for="t_email">Email</label>
			</div>
			<div class="col-75">
				<input name="t_email" type="text" id="t_email" readonly value="<?php echo $objResult1["t_email"];?>">
			</div>
		</div><div class="row">
			<div class="col-25">
				<label for="t_office">Office</label>
			</div>
			<div class="col-75">
				<input name="t_office" type="text" id="t_office" readonly value="<?php echo $objResult1["t_office"];?>">
			</div>
		</div>
	</div>



</body>
</html>
<?php
mysqli_close( $objCon );
?>