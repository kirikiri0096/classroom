<?php
header( 'Content-Type: text/html; charset=utf-8' );
include( "config.php" );
$str = "Invalid argument(s):";
if ( trim( $_POST[ "t_id" ] ) == "" ) {
	$str .= "\\nPlease input Teacher ID!";
	//		exit();
}
if ( trim( $_POST[ "t_fname" ] ) == "" ) {
	$str .= "\\nPlease input Firstname!";
	//		exit();
}
if ( trim( $_POST[ "t_lname" ] ) == "" ) {
	$str .= "\\nPlease input Lastname!";
	//		exit();
}
if ( trim( $_POST[ "txtPassword" ] ) == "" ) {
	$str .= "\\nPlease input Password!";
	//		exit();
}
if ( trim( $_POST[ "txtPassword" ] ) != $_POST[ "txtConpassword" ] ) {
	$str .= "\\nPassword not Match!";
	//		exit();
}
if ( trim( $_POST[ "txtEmail" ] ) == "" ) {
	$str .= "\\nPlease input E-mail!";
	//		exit();
}
if ( trim( $_POST[ "txtPhone" ] ) == "" ) {
	$str .= "\\nPlease input Telephone number!";
	//		exit();
}
if ( trim( $_POST[ "txtOffice" ] ) == "" ) {
	$str .= "\\nPlease input your Office!";
	//		exit();
}
if ( strlen( $str ) > 20 ) {
	echo( "<script>alert('$str'); window.location.href = 't_regis.php';</script>" );
	exit();
}

$strSQL = "SELECT * FROM teacher_info WHERE t_id = '" . trim( $_POST[ 't_id' ] ) . "' ";
$objQuery = mysqli_query( $objCon, $strSQL );
$objResult = mysqli_fetch_array( $objQuery );

if ( $objResult ) {
	//	echo "Teacher name already exists!";
	echo( "<script>alert('ID already exists!'); window.location.href = 't_register.php';</script>" );
} else {
	$strSQL = "INSERT INTO teacher_info (t_id,t_fname,t_lname,t_pass,t_email,t_tel,t_office) VALUES ('" . $_POST[ "t_id" ] . "','" . $_POST[ "t_fname" ] . "','" . $_POST[ "t_lname" ] . "','" . md5( $_POST[ "txtPassword" ] ) . "','" . $_POST[ "txtEmail" ] . "','" . $_POST[ "txtPhone" ] . "','" . $_POST[ "txtOffice" ] . "')";
	$objQuery = mysqli_query( $objCon, $strSQL );

//	header( "Location: register_complete.php" );
	echo( "<script>window.location.href = 'register_complete.php';</script>" );
}
mysqli_close( $objCon );
?>