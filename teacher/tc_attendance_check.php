<?
include( "../session.php" );
include( "../config.php" );
$strSQL = "SELECT std_id,act_time FROM enroll WHERE active = 1 AND `class_code` = '" . $ssclass . "'";
$objQuery = mysqli_query( $objCon, $strSQL );
$no = 0;


if ( mysqli_num_rows( $objQuery ) ) {
	echo("<input type='button' onclick='tableToExcel('studentCheck', 'Student Check')' value='Export to Excel'><br><br>");
	echo( "<table border='1' cellspacing='0px' width='100%' bordercolor='#7FC4FD' id='studentCheck'>
		<tr>
			<td>No.</td>
			<td>ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Attendance time</td>
		</tr>" );
	while ( $objResult = mysqli_fetch_array( $objQuery ) ) {

		$strSQL2 = "SELECT std_fname,std_lname FROM student_info WHERE std_id = '" . $objResult[ "std_id" ] . "'";
		$objQuery2 = mysqli_query( $objCon, $strSQL2 );
		$objResult2 = mysqli_fetch_array( $objQuery2 );
		//		echo $objResult[ "std_id" ] . "&nbsp" . $objResult[ "std_fname" ] . "&nbsp" . $objResult[ "std_lname" ] . "&nbsp" . $objResult[ "std_sec" ] . "<br>";
		$no += 1;
		echo( "<tr>" );
		echo( "<td>$no</td>" );
		echo( "<td>{$objResult[ "std_id" ]}</td>" );
		echo( "<td>{$objResult2[ "std_fname" ]}</td>" );
		echo( "<td>{$objResult2[ "std_lname" ]}</td>" );
		echo( "<td>{$objResult[ "act_time" ]}</td>" );
	}
	echo( "</table>" );

} else {
	echo "No student!!";
}
mysqli_close( $objCon );
?>
<head>
	<script src="tableToExcel.js"></script>
	<style>
		input[type=button] {
			width: 100px;
			height: 30px;
			background-color: #2699FB;
			color: white;
			border: none;
			float: right;
		}
	</style>
</head>

<body>
	
</body>