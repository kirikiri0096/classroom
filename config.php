<?php
date_default_timezone_set("Asia/Bangkok");
define('servername','webservhost');
define('username','usrName');
define('password','usrass');
define('dbname','classroomDB');

$objCon = mysqli_connect(servername,username,password,dbname) or die ("Error Connect to Database");
mysqli_set_charset($objCon,"utf8");
?>