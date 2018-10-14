<?php
include( '../session.php' );
include( '../config.php' );
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>


	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<form action="t_edit_save.php?CusID=<?php echo $_GET["CusID"];?>" name="frmEdit" method="post">
			<?php
			$strSQL = "SELECT * FROM post WHERE post_id = '" . $_GET[ "CusID" ] . "' ";
			$objQuery = mysqli_query( $objCon, $strSQL );
			$objResult = mysqli_fetch_array( $objQuery );
			if ( !$objResult ) {
				echo "Not found CustomerID=" . $_GET[ "CusID" ];
			} else {
				?>
			<input type="hidden" name="post_id" value="<?php echo $_GET["CusID"]; ?>">
			<input type="text" name="post_info" id="post_info" autofocus="autofocus" style="height: 100px; width: 100%; resize: none; border-style: solid; border-color: #2699FB;" value="<?php echo $objResult["post_info"]; ?>"></input>
			<br><br>
			<input type="submit" name="submit" value="submit">
			<?php
			}
			mysqli_close( $objCon );
			?>
		</form><br>
	</div>
</body>
</html>