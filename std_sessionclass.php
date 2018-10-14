<?
session_start();
$_SESSION['class_code']=$_POST["code"];
header("Location:page2.php");
//print_r($_SESSION);

?>
