<!doctype html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Student Registertion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="header" class="commonEle header" style="top: 0; width: 100%; padding-top: 3vw; padding-bottom: 50px; font-size: 250%;">
		<div id="className" style="font-size: 100%; padding-left: 2%; "><br>Student Registeration</div>
	</div>
	<br>

	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<form id="form1" name="form1" method="post" action="std_save_regis.php">
			<div class="row">
				<div class="col-25">
					<label for="std_id">ID:</label>
				</div>
				<div class="col-75">
					<input name="std_id" type="text" id="std_id" placeholder="Student ID (8 digits)" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_fname">Firstname:</label>
				</div>
				<div class="col-75">
					<input name="std_fname" type="text" id="std_fname" placeholder="Firstname" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_lname">Lastname:</label>
				</div>
				<div class="col-75">
					<input name="std_lname" type="text" id="std_lname" placeholder="lastname" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_email">E-mail:</label>
				</div>
				<div class="col-75">
					<input name="std_email" type="email" id="std_email" placeholder="xxxxxxxx@kmitl.ac.th" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_pass">Password:</label>
				</div>
				<div class="col-75">
					<input name="std_pass" type="password" id="std_pass" placeholder="password" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="std_conpass">Confirm:</label>
				</div>
				<div class="col-75">
					<input name="std_conpass" type="password" id="std_conpass" placeholder="verify password" required>
				</div>
			</div>

			<br>
			<input name="Submit" type="submit" value="Register"></input>
			<a href="index.php" style="color: #7FC4FD; font-size: 15px; padding-left: 10px;">back</a>


		</form><br>
	</div>

</body>
</html>