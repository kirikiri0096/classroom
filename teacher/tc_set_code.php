<?
include("../session.php");
header('Content-Type: text/html; charset=utf-8');
	include("../config.php");
        $strSQL = "UPDATE class SET class_attend = '".$_POST["code"]."' WHERE class_code = '".$ssclass  ."'";
		$objQuery = mysqli_query($objCon,$strSQL);
//echo("Attendance code has been set already!!<BR>id: ".$_POST["code"]);
echo("<script>alert('Attendance code has been set');window.location.href = 'tc_gen_code.php';</script>");
?>
