<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
	<style>
		html,
		body {
			margin: 0;
			font-family: Arial;
			overflow: hidden;
		}
		
		div.commonEle {
			background-color: #2699FB;
			color: white;
		}
		
		.butatt {
			width: 100%;
			height: 50px;
			background-color: #2699FB;
			color: white;
			border: none;
			font-size: 30px;
		}
		
		.butatt:hover {
			background-color: #BCE0FD;
		}
		@media screen and (max-width: 950px) {
			input[type=button] {
			font-size: 100%;
		}
		}
		@media screen and (max-width: 450px) {
			input[type=button] {
			font-size: 50%;
		}
		}

	</style>
</head>
</head>

<body>

	<!--
	<div style="position: absolute; top: 150px; left: 50%;">
		<div style="position: relative; left: -50%; border: thin; border-style: solid; border-color: #7FC4FD; padding: 10px; border-radius: 10px; min-width: 400px;">
			<center>
				<a href="tc_gen_code.php"><input type="button" value="Generate code" class="butatt"></input></a><br><br>
				<a href="tc_attendance_check.php"><input type="button" value="Student Check" class="butatt"></input></a><br><br>
			</center>
		</div>
	</div>
-->

	<iframe id="attanCanvas" name="attanCanvas" style="position: absolute; padding: 10px; width: 75%; height: 100%; border: none; overflow:hidden;" src="tc_attendance_check.php"></iframe>
	
	<div style="position: absolute; width: 22%; right: 0; margin: 0; padding-top: 20px" align="right">
		<a href="tc_gen_code.php" target="attanCanvas"><input type="button" value="Generate code" class="butatt"></input></a><br><br>
		<a href="tc_attendance_check.php" target="attanCanvas"><input type="button" value="Student Check" class="butatt"></input></a><br><br>
		<a href="tc_reach.php" target="attanCanvas"><input type="button" value="Colaboration" class="butatt"></input></a><br><br>
	</div>
</body>
</html>