<? 
include("../session.php");
include("../config.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<style>
		.overlay {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			right: 0;
			background-color: rgb(0, 0, 0);
			background-color: rgba(0, 0, 0, 0.9);
			overflow-x: hidden;
			transition: 0.5s;
		}
		
		.overlay-content {
			position: relative;
			top: 25%;
			width: 100%;
			text-align: center;
			margin-top: 30px;
		}
		
		.overlay a {
			padding: 8px;
			text-decoration: none;
			font-size: 36px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}
		
		.overlay a:hover,
		.overlay a:focus {
			color: #f1f1f1;
		}
		
		.overlay button {
			width: 100%;
			background-color: inherit;
			padding: 8px;
			text-decoration: none;
			font-size: 36px;
			color: #818181;
			display: block;
			transition: 0.3s;
			border-style: none;
		}
		
		.overlay button:hover,
		.overlay button:focus {
			color: #f1f1f1;
		}
		
		.overlay .closebtn {
			position: absolute;
			top: 20px;
			right: 45px;
			font-size: 60px;
		}
		
		.ifra {
			position: absolute;
			top: 155px;
			right: 1.5%;
			width: 100%;
			height: 81.5%;
			margin: auto;
			z-index: -1;
		}
		
		.icon {
			display: none;
		}
		
		.tab a {
			width: 23.5vw;
		}
		
		.container2 {
			display: inline-block;
			cursor: pointer;
		}
		
		.bar1,
		.bar2,
		.bar3 {
			width: 35px;
			height: 5px;
			background-color: white;
			margin: 6px 0;
			transition: 0.4s;
		}
		
		.change .bar1 {
			-webkit-transform: rotate(-45deg) translate(-9px, 6px);
			transform: rotate(-45deg) translate(-9px, 6px);
		}
		
		.change .bar2 {
			opacity: 0;
		}
		
		.change .bar3 {
			-webkit-transform: rotate(45deg) translate(-8px, -8px);
			transform: rotate(45deg) translate(-8px, -8px);
		}
		
		@media screen and (max-width: 700px) {
			.tab {
				font-size: 20%;
			}
		}
		
		@media screen and (max-width: 560px) {
			#tablogoff {
				display: none;
			}
			.tab a.button-button {
				display: none;
			}
			a.icon {
				display: inline;
			}
			#LogOff,
			#myBtn {
				display: none;
			}
			.ifra {
				top: 7%;
				height: 89%;
			}
		}
		
		@media screen and (max-height: 1000px) {
			.ifra {
				top: 150;
				height: 79%;
			}
		}
		
		@media screen and (max-height: 800px) {
			.ifra {
				top: 150;
				height: 82%;
			}
		}
		
		@media screen and (max-height: 1000px) {
			.ifra {
				top: 150;
				height: 79%;
			}
		}
		
		@media screen and (max-height: 450px) {
			.overlay a {
				font-size: 20px
			}
			.overlay .closebtn {
				font-size: 40px;
				top: 15px;
				right: 35px;
			}
			.ifra {
				top: 30%;
				height: 60%;
			}
		}
		
		@media screen and (max-height: 359px) {
			.ifra {
				top: 45%;
				height: 40%;
			}
		}
	
		
		.commonEle button {
			width: 70px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
		
		.commonEle button:hover {
			background-color: #BCE0FD;
		}
		
		.modal {
			display: none;
			position: fixed;
			z-index: 10;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0, 0, 0);
			background-color: rgba(0, 0, 0, 0.4);
		}
		
		.modal-content {
			background-color: #fefefe;
			margin: auto;
			max-width: 500px;
			padding: 10px;
			border: thin;
			border-style: solid;
			border-color: #7FC4FD;
			border-radius: 10px;
			word-break: break-all;
		}
		
		.modal-content input[type=text] {
   		 	border: solid;
			border-color: #2699FB;
    		font-size: 15px;
		}
		
		.close {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}
		
		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
		a {
			text-decoration: none;
			color: white;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body scroll="no">
	<? 
	$objQuery = mysqli_query($objCon,"SELECT * FROM class WHERE class_code='".$ssclass."'");
	$objResult = mysqli_fetch_array($objQuery);
	?>

	<div id="header" class="commonEle header" style="position: fixed; top: 0; width: 100%; padding-top: 3vw; font-size: 250%;">
		<a href="../std_select.php"><div id="className" style="padding-left: 2%;"><? echo $objResult["class_name"] ?></div></a>

<!--
		<div style="position: fixed; right: 3px; top: 40px;" class="commonEle">
			<a href="../sessionclear.php"><input type="button" value="Log Out"></a>
		</div>
-->
		<div style="position: fixed; right: 3px; top: 1%;" class="commonEle">
			<a href="javascript:void(0);" class="icon" onclick="openOverLay()">
				<div class="container2">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
			</a>
			<button id="myBtn">Attendance</button>
			<a href="../sessionclear.php" id="LogOff"><input type="button" value="Log Out"></a>
		</div>

		<div id="class section" style="padding-left: 3%; font-size: 30%;">Section <? echo $objResult["section"] ?></div>
		<div id="buttonBar" class="tab">
			<center>
				<a class="button-button active" onclick="buttonClick(event, 'activity')" href="std_post.php" target="mainiFrame">
					<p>Activity</p>
				</a>
				<a class="button-button" onclick="buttonClick(event, 'chat')" href="std_chat.php" target="mainiFrame">
					<p>Chat</p>
				</a>
				<a class="button-button" onclick="buttonClick(event, 'resources')" href="../tc_file_list.php" target="mainiFrame">
					<p>Resources</p>
				</a>
				<a class="button-button" onclick="buttonClick(event, 'profile')" href="std_edit_profile.php" target="mainiFrame">
					<p>About</p>
				</a>
			</center>
		</div>
	</div>
	
	<div id="buttonBarOverlay" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeOverLay()">&times;</a>
		<div class="overlay-content">
			<a onclick="buttonClick(event, 'activity')" href="std_post.php" target="mainiFrame">Activity</a>
			<a onclick="buttonClick(event, 'chat')" href="std_chat.php" target="mainiFrame">Chat</a>
			<a onclick="buttonClick(event, 'resources')" href="../tc_file_list.php" target="mainiFrame">Resources</a>
			<a onclick="buttonClick(event, 'profile')" href="std_edit_profile.php" target="mainiFrame">About</a>
			<button id="myBtn2">Attendance</button>
			<a href="../sessionclear.php">Log out</a>
		</div>
	</div>
	
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<h1>Input attendance code</h1>
				<form name="inputAttend" method="post" action="../std_check_attend.php">
					<input type="text" name="code"><br><br>
					<input type="submit" name="submit" value="submit" style="align-content: center">
					<br><br>
				</form>
		</div>
	</div>
	<iframe id="mainCanvas" name="mainiFrame" class="ifra" style="padding-top: 10px; padding-bottom: 10px; width: 95%; border: hidden; " src="std_post.php"></iframe>
	<div id="footer">
		<p style="padding-right: 10px;">Information Engineering</p>
	</div>
	<script>
		function buttonClick( evt, buttonDes ) {
			var i, tabcontent, tablinks;
			tablinks = document.getElementsByClassName( "button-button" );
			for ( i = 0; i < tablinks.length; i++ ) {
				tablinks[ i ].className = tablinks[ i ].className.replace( " active", "" );
			}
			evt.currentTarget.className += " active";
			document.getElementById( "buttonBarOverlay" ).style.width = "0%";
		}

		function openOverLay() {
			document.getElementById( "buttonBarOverlay" ).style.width = "100%";
		}

		function closeOverLay() {
			document.getElementById( "buttonBarOverlay" ).style.width = "0%";
		}

		var modal = document.getElementById( 'myModal' );

		// Get the button that opens the modal
		var btn = document.getElementById( "myBtn" );
		var btn2 = document.getElementById( "myBtn2" );

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName( "close" )[ 0 ];

		// When the user clicks the button, open the modal 
		btn.onclick = function () {
			modal.style.display = "block";
		}
		btn2.onclick = function () {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function () {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function ( event ) {
			if ( event.target == modal ) {
				modal.style.display = "none";
			}
		}
	</script>
</body>
</html>