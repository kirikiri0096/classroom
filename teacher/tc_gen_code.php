<?include("../session.php");
?>
<!DOCTYPE html>
<html>
<head>  
	<title></title>
	<style>
		body {
			margin: 0;
			font-family: Arial;
		}
		
		h1 {
			color: #2699FB;
			font-size: 19px;
		}
		
		input[type=text] {
			padding-left: 5px;
			height: 30px;
			width: 60%;
			font-size: 15px;
		}
		input[type=button],
		input[type=submit] {
			width: 80px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
		}
	</style>
</head>

<body>
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
	</script>

	<div style="position: absolute; top: 150px; left: 50%;">
		<div style="position: relative; left: -50%; border: thin; border-style: solid; border-color: #7FC4FD; padding: 10px; border-radius: 10px;">
			<center>
				<h1>Generate attendance code</h1>
				<font size="-1">Current: 
					<?
					include("../config.php");
					$strSQL = "SELECT class_attend FROM class WHERE class_code = '".$ssclass."'";
					$objQuery = mysqli_query( $objCon, $strSQL );
					$objResult = mysqli_fetch_array( $objQuery );
					echo($objResult['class_attend']);
					?>
				</font><br><br>
			<form name="gen" method="post" action="tc_set_code.php">
				<input type='text' name="code" id='p'>
				<input type='button' value='generate' onclick='document.getElementById("p").value = Password.generate(6)'><br><br>
				<input type="submit" name="submit" value="Set this code"><br>
			</form>
			</center>
		</div>
	</div>
</body>
</html>