<?
	session_start();

	$strcc = null;
	if(isset($_GET["cc"]))
		$strcc = $_GET["cc"];

	$_SESSION["class_code"] = $strcc;
	echo $_SESSION["class_code"]."<script>window.location.href='teacher/'</script>";

?>