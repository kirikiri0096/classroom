<?
include( "session.php" );
include( "config.php" );
if ( $ssst != "teacher" ) {
	echo "Sorry,your are not teacher!!";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<style>
			body {
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
		
		input[type=text],
		input[type=password],
		input[type=email] {
			padding-left: 5px;
			height: 28px;
			width: 100%;
			border: solid #2699fb;
		}
		
		input[type=submit] {
			float: right;
			width: 70px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
		
		input[type=button] {
			width: 70px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
		
		input[type=button]:hover {
			background-color: #BCE0FD;
		}
		
		.col-25v2 {
			float: left;
			height: 36px;
			width: 25%;
			margin-top: 6px;
			background-color: #2699FB;
			color: white;
			text-align: center;
		}
		
		.col-75v2 {
			float: left;
			width: 70%;
			margin-top: 6px;
			border-color: #2699FB;
		}
		.col-littlev2 {
			float: left;
			width: 50%;
			margin-top: 6px;
			border-color: #2699FB;
		}
		#genButv2 {
			float: right;
			width: 100%;
			margin-top: 6px;
			border-style: solid;
			border-color: #2699FB;
		}
		/* Clear floats after the columns */
		
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
		
		@media screen and (max-width: 600px) {
			.col-25v2,
			.col-75v2 {
				background-color: white;
				color: black;
				width: 100%;
				margin-top: 0;
				
			}
	</style>
</head>

<body onload="abc()">
	<script type="text/javascript">
		var Password = {

			_pattern: /[a-zA-Z0-9]/,


			_getRandomByte: function () {
				if ( window.crypto && window.crypto.getRandomValues ) {
					var result = new Uint8Array( 1 );
					window.crypto.getRandomValues( result );
					return result[ 0 ];
				} else if ( window.msCrypto && window.msCrypto.getRandomValues ) {
					var result = new Uint8Array( 1 );
					window.msCrypto.getRandomValues( result );
					return result[ 0 ];
				} else {
					return Math.floor( Math.random() * 256 );
				}
			},

			generate: function ( length ) {
				return Array.apply( null, {
						'length': length
					} )
					.map( function () {
						var result;
						while ( true ) {
							result = String.fromCharCode( this._getRandomByte() );
							if ( this._pattern.test( result ) ) {
								return result;
							}
						}
					}, this )
					.join( '' );
			}

		};

		function abc() {
			document.getElementById( "r" ).value = Password.generate( 6 );
		}
	</script>

	<div id="header" class="commonEle header">
		<div id="className" style="font-size: 250%; padding-left: 2%; padding-bottom: 16px;">Class Select</div>
	</div>
	<br>
	<div class="grid">
		<?php
		$strSQL = "SELECT class_name,class_code,section FROM class WHERE t_id = '" . $_SESSION[ "user_id" ] . "' ORDER BY class_name,section ASC";
		$objQuery = mysqli_query( $objCon, $strSQL );

		while ( $objResult = mysqli_fetch_array( $objQuery ) ) {
			?>
		<div class="col-25">
			<a href="t_select_pass.php?cc=<? echo $objResult["class_code"] ?>">
				<div class="block gutter">
					<h1>
						<? echo $objResult["class_name"] ?>
					</h1>
					Section:
					<? echo $objResult["section"] ?><br> Class code:
					<? echo $objResult["class_code"] ?>
				</div>
			</a>
		</div>
		<?
		}
	
		mysqli_close( $objCon );
		?>
		<div class="col-25">
			<a href="javascript:void(0);" id="mdBtn">
				<div class="block gutter">
					<h1>+</h1>add class
				</div>
			</a>
		</div>
		<div class="clear"></div>
	</div>

	<div id="myModal" class="modal">
		<div class="modal-content" style="max-width: 500px">
			<span class="close">&times;</span>
			<div class="modal-body">
				<center>
					<h1>Create a new class</h1>
					<form name="createclass" method="post" action="tc_save_class.php">
						<!--
			<table border="1" cellspacing="0">
				<tr>
					<td>Class ID:</td>
					<td><input type="text" name="classid"></td>
				</tr>
				<tr>
					<td>Class Name:</td>
					<td><input type="text" name="classname"></td>
				</tr>
				<tr>
					<td>Class Section:</td>
					<td><input type="text" name="classsec"></td>
				</tr>
				<tr>
					<td>Generate Class code:</td>
					<td>
						<div style="display: inline-block">
						<div style="width: 100%; display: inline-block;"><input id="p" type="text" name="classcode"></div>
						<div style="display: inline-block;"><input type='button' value='generate' onclick='document.getElementById("p").value = Password.generate(6)'></div>
						</div>
					</td>
				</tr>
				
			</table>
-->
						<div class="row">
							<div class="col-25v2">
								<label for="classid">Class ID:</label>
							</div>
							<div class="col-75v2">
								<input name="classid" type="text" id="classid" placeholder="Enter class ID" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25v2">
								<label for="classname">Class Name</label>
							</div>
							<div class="col-75v2">
								<input name="classname" type="text" id="classname" placeholder="Enter class Name" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25v2">
								<label for="classsec">Class Section</label>
							</div>
							<div class="col-75v2">
								<input name="classsec" type="text" id="classsec" placeholder="Enter class ID" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25v2">
								<label for="classsec">Class code</label>
							</div>
							<div class="col-littlev2">
								<input id="p" type="text" name="classcode" readonly>
							</div>
							<div style="display: inline-block;">
							  <input type='button' value='generate' onclick='document.getElementById("p").value = Password.generate(6)' id="genButv2">
						  	</div>
						</div>
						<input type="text" name="attend" style="display: none;" id="r">
						</p>
						<input type="submit" name="submit" value="save">
						<div class="clear"></div>
					</form>
				</center>
			</div>
		</div>

		<script src="js/modal.js"></script>
</body>
</html>