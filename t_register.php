<!doctype html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Teacher Registertion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="header" class="commonEle header" style="top: 0; width: 100%; padding-top: 3vw; padding-bottom: 50px; font-size: 250%;">
		<div id="className" style="font-size: 100%; padding-left: 2%; "><br>Teacher Registeration</div>
	</div>
	<br>
	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<form name="form2" method="post" action="t_save_register.php">
			<div class="row">
				<div class="col-25">
					<label for="t_id">ID:</label>
				</div>
				<div class="col-75">
					<input name="t_id" type="text" id="t_id" placeholder="Teacher ID or username" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_fname">Firstname:</label>
				</div>
				<div class="col-75">
					<input name="t_fname" type="text" id="t_fname" placeholder="Firstname" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="t_lname">Lastname:</label>
				</div>
				<div class="col-75">
					<input name="t_lname" type="text" id="t_lname" placeholder="Lastname" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="txtEmail">E-mail:</label>
				</div>
				<div class="col-75">
					<input name="txtEmail" type="email" id="email" placeholder="E-mail" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="txtPassword">Password:</label>
				</div>
				<div class="col-75">
					<input name="txtPassword" type="password" id="pass" placeholder="Password" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="txtConpassword">Confirm:</label>
				</div>
				<div class="col-75">
					<input name="txtConpassword" type="password" id="con" placeholder="Confirm password" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="txtPhone">Telphone</label>
				</div>
				<div class="col-75">
					<input name="txtPhone" type="text" id="phone" size="10" placeholder="telephone number" required>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="txtOffice">Office</label>
				</div>
				<div class="col-75">
					<input name="txtOffice" type="text" id="office" placeholder="Room" required>
				</div>
			</div>

			<br>
			<input name="Submit" type="submit" value="Register"></input>
			<a href="index.php" style="color: #7FC4FD; font-size: 15px; padding-left: 10px;">back</a>


		</form><br>
	</div>
</body>
</html>