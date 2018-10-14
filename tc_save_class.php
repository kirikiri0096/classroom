<?
include("session.php");
header('Content-Type: text/html; charset=utf-8');
	include("config.php");
        $strSQL = "INSERT INTO class(class_id,class_name,class_code,section,class_attend,t_id) VALUES ('".$_POST["classid"]."','".$_POST["classname"]."','".$_POST["classcode"]."','".$_POST["classsec"]."','".$_POST["attend"]."','".$ssid."')" ;
		$objQuery = mysqli_query($objCon,$strSQL);
//echo("Attendance code has been set already!!<BR>id: ".$_POST["code"]);
echo("<script>alert('Class has been create already');window.location.href = 't_select.php';</script>");
?>
