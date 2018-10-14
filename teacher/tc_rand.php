<?
include( "../session.php" );
include( "../config.php" );
if ( $_POST[ "rand_mode" ] == 1 ) {
	$grp = rand_mem( $_POST[ "rand_all" ], $_POST[ "rand_max" ] );
} else if ( $_POST[ "rand_mode" ] == 2 ) {
	$grp = rand_group( $_POST[ "rand_all" ], $_POST[ "rand_amount" ] );
} else {
//	echo "<script>alert('Wrong Input');window.location.href = 'tc_reach.php';</script>";
//	
}
//print_r( $grp );
echo "<br>";
$grouplist = array();


for ( $i = 0; $i < count( $grp ); $i++ )
	for ( $j = 0; $j < $grp[ $i ]; $j++ ) {
		array_push( $grouplist, $i + 1 );
	}
	//print_r ($grouplist);
echo "<br />";

$k = 0;
$a = 0;
$kuy = array();
$objQuery = mysqli_query( $objCon, "SELECT std_id FROM enroll WHERE active = 1 AND class_code = '" . $ssclass . "'" );
while ( $objResult = mysqli_fetch_array( $objQuery ) ) {
	//$kuy = array();
	array_push( $kuy, $objResult[ "std_id" ] );
//	echo $kuy[ $a++ ] . "<br />";
	//echo $objResult["std_id"]." --> ".$grouplist[$a++]."<br>"; 

}

shuffle( $kuy );
//print_r( $kuy );

//echo "<br><br><br />======<br /><br>";

?>



<body>
	<div style="max-width: 500px; margin: auto; background: white; padding: 10px; border: thin; border-style: solid; border-color: #7FC4FD; border-radius: 10px;">
		<?
		if ( $_POST[ "rand_mode" ] == 1 ) {
			for ( $hee = 0; $hee < $_POST[ "rand_all" ]; $hee++ ) {
//				echo $kuy[ $hee ] . "-->" . $grouplist[ $hee ] . "<br>";
				echo("Group [" . $grouplist[ $hee ] . "] - " . $kuy[ $hee ] . "<br>");
			}
		} else {
			for ( $hee = 0; $hee < $_POST[ "rand_all" ]; $hee++ ) {
//				echo $kuy[ $hee ] . "-->" . $grouplist[ $hee ] . "<br>";
				echo("Group [" . $grouplist[ $hee ] . "] - " . $kuy[ $hee ] . "<br>");
			}
		}
		?>
	</div>
</body>



<?

//+++++ FUNCTION +++++
function rand_mem( $all, $max ) {
	$group = intval( $all / $max );
	$member = $max;
	$remind = fmod( $all, $max );

	$groupdiv = array();
	for ( $i = 0; $i < $group; $i++ ) {
		array_push( $groupdiv, $member );
	}
	if ( $remind != 0 ) {
		array_push( $groupdiv, $remind );
		$group++;
	}
	$cur = $group - 2;
	while ( $groupdiv[ $group - 1 ] < $groupdiv[ $cur ] - 1 ) {
		$groupdiv[ $cur-- ]--;
		$groupdiv[ $group - 1 ]++;
		if ( $cur = -1 )$cur = $group - 2;
	}
	return ( $groupdiv );

}

function rand_group( $all, $group ) {
	$member = intval( $all / $group );
	$remind = fmod( $all, $group );

	$groupdiv = array();
	for ( $i = 0; $i < $group; $i++ ) {
		array_push( $groupdiv, $member );
	}
	if ( $remind != 0 )$groupdiv[ $group - 1 ] += $remind;
	$cur = 0;
	while ( $groupdiv[ $group - 1 ] > $groupdiv[ $cur ] ) {
		echo $cur;
		$groupdiv[ $cur++ ]++;
		$groupdiv[ $group - 1 ]--;
	}
	return ( $groupdiv );
}
?>