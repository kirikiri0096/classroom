<!DOCTYPE html>
<html>
<head>
	<title>Self Attendance</title>
	<style>
		html,
		body {
			margin: 0;
			font-family: Arial;
			overflow: hidden;
		}
		
		h1 {
			color: #2699FB;
			font-size: 19px;
		}
		
		div.commonEle {
			background-color: #2699FB;
			color: white;
		}
		
		div.header {
			position: fixed;
			top: 0;
			width: 100%;
			padding-top: 30px;
		}
		
		button {
			float: right;
			width: 70px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
		
		input[type=submit] {
			width: 70px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
		
		#footer {
			background-color: #2699FB;
			color: white;
			position: fixed;
			text-align: right;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>

<body>
	<center>
		<h1>Input attendance code</h1>

	</center>
	<div id="header" class="commonEle header">
		<div id="className" style="font-size: 250%; padding-left: 2%; padding-bottom: 16px;">Self - Attendance</div>
	</div>
	<div style="position: absolute; top: 150px; left: 50%;">
		<div style="position: relative; left: -50%; border: thin; border-style: solid; border-color: #7FC4FD; padding: 10px; border-radius: 10px; min-width: 400px;">
			<center><br>
				<h1>Input attendance code</h1>
				<form name="inputAttend" method="post" action="std_check_attend.php">
					<input type="text" name="code"><br><br>
					<input type="submit" name="submit" value="submit" style="align-content: center">
				</form>
			</center><br>
		</div>
	</div>
</body>
</html>