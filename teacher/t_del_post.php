<?php
include('../config.php');
include('../session.php');
?>
<html>
<body>
<?php
$strSQL = "DELETE post FROM post_info WHERE post_id = '".$_POST["post_id"]."'";
$objQuery = mysqli_query($objCon,$strSQL);
if($objQuery)
{
echo "<meta http-equiv ='refresh'content='0;URL=t_post.php'>";
}
else
{
echo "Error Save [".$strSQL."]";
}
mysqli_close($objCon);
?>
</body>
</html>