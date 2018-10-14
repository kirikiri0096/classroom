<!doctype html>
<html>
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>THIS IS A GOD SAKE!!!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		@media screen and (max-width: 340px) {
			h1 {
				text-align: center;
			}
			input[type=submit] {
				float: none;
				width: 100%;
			}
			a {
				display: flex;
				align-items: center;
				justify-content: center;
			}
		}
	</style>
</head>

<body>
	<div id="header" class="commonEle header" style="position: fixed; top: 0; width: 100%; padding-top: 3vw; padding-bottom: 50px; font-size: 250%;">
		<div id="className" style="padding-left: 2%;"><br>Login</div>
	</div>
	<div id="mainFrame" name="mainiFrame" style="position: absolute; left: 25%; width: 50%; top: 14%; border: thin; border-style: solid; border-color: #7FC4FD; background-color: white;">
		<div id="buttonBar" class="tab">
			<center>
				<button class="button-button active" style="width: 23.9vw; font-size: 100%;" onclick="openITEM(event, 'Student')">
					<p>Student</p>
				</button>
				<button class="button-button" style="width: 23.9vw; font-size: 100%;" onclick="openITEM(event, 'Teacher')">
					<p>Teacher</p>
				</button>
			</center>
		</div>

		<div id="Student" class="container tabcontent">
			<h1 id="stdHead">Student login</h1>
			<form name="form1" method="post" action="std_check_login.php">
				<div class="row">
					<div class="col-25">
						<label for="std_id">ID:</label>
					</div>
					<div class="col-75">
						<input name="std_id" type="text" id="std_id" placeholder="Student ID" required>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="std_pass">Password:</label>
					</div>
					<div class="col-75">
						<input name="std_pass" type="password" id="std_pass" placeholder="Password" required>
					</div>
				</div>
				<br>
				<a href="std_regis.php" style="color: #7FC4FD; font-size: 15px;">Register</a>
				<input name="Submit" type=submit value="Login"></input>
			</form>
		</div>

		<div id="Teacher" class="container tabcontent" style="display: none">
			<h1 id="stdHead">Teacher login</h1>
			<form name="form2" method="post" action="t_check_login.php">
				<div class="row">
					<div class="col-25">
						<label for="t_id">ID:</label>
					</div>
					<div class="col-75">
						<input name="t_id" type="text" id="t_id" placeholder="Teacher ID" required>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="t_pass">Password:</label>
					</div>
					<div class="col-75">
						<input name="t_pass" type="password" id="t_pass" placeholder="Password" required>
					</div>
				</div>
				<br>
				<a href="t_register.php" style="color: #7FC4FD; font-size: 15px;">Register</a>
				<input name="Submit" type=submit value="Login"></input>
			</form>
		</div>
	</div>

	<div id="changeLog" style="position: absolute; left: 1px; bottom: 30px; font-size: 10px; color: #BCE0FD; z-index: -1; display: none;">
		<p>Change Log</p>
		<p>10-ARP-18 0:34 AM. [xWARNx] UI is not responsive and still buggy</p>
		<p>10-ARP-18 0:34 AM. [UPDATE] UI for login screen (alpha)</p>
		<p>07-APR-18 8:18 PM. [UPDATE] CHAT BOT &amp; LOGIN SESSION finished!</p>
		<p>05-APR-18 4:23 AM. [UPDATE] CHAT with reply &amp; unsent tool finished!</p>

	</div>
	<div id="footer">
		<p style="padding-right: 10px; font-size: 5%">Information Engineering</p>
	</div>
	<script>
		function openITEM( evt, item ) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName( "tabcontent" );
			for ( i = 0; i < tabcontent.length; i++ ) {
				tabcontent[ i ].style.display = "none";
			}
			tablinks = document.getElementsByClassName( "button-button" );
			for ( i = 0; i < tablinks.length; i++ ) {
				tablinks[ i ].className = tablinks[ i ].className.replace( " active", "" );
			}
			document.getElementById( item ).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
</body>
</html>