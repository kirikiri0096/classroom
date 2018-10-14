<?
   	@session_start();

	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    	session_unset(); 
    	session_destroy(); 
		echo "<script>alert('Please Login AGAIN!!!'); window.location ='index.php';</script>";
	}

	$_SESSION['LAST_ACTIVITY'] = time(); 

   	$ssid = $_SESSION['user_id'];
	$ssclass = $_SESSION['class_code'];
	$ssst = $_SESSION['status'];
?>