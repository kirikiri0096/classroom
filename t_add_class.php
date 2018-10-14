<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		function abc(){
			document.getElementById("r").value = Password.generate(6);
		}
	</script>
	<center>
		<h1>Create a new class</h1>
		<form name="createclass" method="post" action="tc_save_class.php">
			<table border="1">
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
					<td><input id="p" name="classcode"><input type='button' value='generate' onclick='document.getElementById("p").value = Password.generate(6)'></td>
				</tr>
				
			</table>
			<input type="text" name="attend" style="display: none;" id="r"></p>
			<input type="submit" name="submit" value="save">
			
		</form>
	</center>
</body>
</html>