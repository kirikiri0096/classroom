<?
include("session.php");
include( "config.php" );
if($ssst != "student"){
	echo"Sorry,your are not student!!";
	exit();
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<style>
		body{
			margin: 0;
		}
		
		div.commonEle {
			background-color: #2699FB;
			color: white;
		}
		
		div.header {
			top: 0;
			width: 100%;
			padding-top: 30px;
		}
		
		input[type=text], input[type=password], input[type=email] {
    		padding-left: 5px;
    		height: 30px;
    		border: solid #2699fb;
    		font-size: 15px;
		}
		input[type=submit] {
    		width: 70px;
    		height: 30px;
    		background-color: #2699FB;
    		color: white;
    		border: none;
		}
		input[type=submit]:hover {
    		background-color: #BCE0FD;
		}
	</style>
</head>
<body>
		<div id="header" class="commonEle header">
			<div id="className" style="font-size: 250%; padding-left: 2%; padding-bottom: 16px;">Class Select</div>
		</div>
		<br>
	<center>
		<div class="grid">
		<?php
		$strSQL = "SELECT * FROM enroll 
			LEFT JOIN class ON (enroll.class_code=class.class_code) 
			LEFT JOIN teacher_info ON (teacher_info.t_id=class.t_id) 
			WHERE enroll.std_id = '".$ssid."' ORDER BY class.class_name,class.section ASC" ;
		$objQuery = mysqli_query( $objCon, $strSQL );
		while ( $objResult = mysqli_fetch_array( $objQuery ) ) {
				?>
			
				<div class="col-25">
				<a href="std_select_pass.php?cc=<? echo $objResult["class_code"] ?>">
				<div class="block gutter">
				<h1><? echo $objResult["class_name"] ?></h1>
				Section: <? echo $objResult["section"] ?><br>
				Teacher: <? echo $objResult["t_fname"]." ".$objResult["t_lname"] ?>
					<div class="clear"></div>
				</div></a></div>
				<?
		}	
		mysqli_close( $objCon );
		?>
			<div class="col-25"><a href="javascript:void(0);" id="mdBtn"><div class="block gutter" >
				<h1>+</h1>add class
				</div></a></div>
			<div class="clear"></div>
		</div>
	
		<div id="myModal" class="modal">
		<div class="modal-content" style="max-width: 500px">
		<span class="close">&times;</span>
    	<div class="modal-body">
		<center>
		<h1>Add your class</h1>
		<form name="createclass" method="post" action="std_check_classcode.php">
			<input type="text" name="classcode">
			<input type="submit" name="submit" value="Add class">
			<div class="clear"></div>
		</form>
		</center>
  	</div>
	</div>
	
	<script src="js/modal.js"></script>
</body>
</html>