<?php
header( 'Content-Type: text/html; charset=utf-8' );
include( "config.php" );

$str = "Invalid argument(s):";
if ( $_POST[ "std_pass" ] != $_POST[ "std_conpass" ] ) {
	$str .= "\\n - Password not Match!";
	echo( "<script>alert('Password not Match!'); window.location.href = 'std_regis.php';</script>" );
	exit();
}

$strSQL = "SELECT * FROM student_info WHERE std_id = '" . trim( $_POST[ 'std_id' ] ) . "' ";
$objQuery = mysqli_query( $objCon, $strSQL );
$objResult = mysqli_fetch_array( $objQuery );
if ( $objResult ) {
	//			echo "ID already exists!";
	echo( "<script>alert('ID already exists!'); window.location.href = 'std_regis.php';</script>" );
} else {

	$strSQL = "INSERT INTO student_info (std_id,std_fname,std_lname,std_pass,std_email) VALUES ('" . $_POST[ "std_id" ] . "','" . $_POST[ "std_fname" ] . "','" . $_POST[ "std_lname" ] . "','" . md5( $_POST[ "std_pass" ] ) . "','" . $_POST[ "std_email" ]   . "')";
	$objQuery = mysqli_query( $objCon, $strSQL );

	echo"<script>alert('Register Complete!');window.location.href = 'index.php';</script>";
}

mysqli_close( $objCon );
?>