<?php
include('../config.php');
include('../session.php');
?>
<html>
<body>
<?php
$strSQL = "UPDATE post SET post_info = '".$_POST["post_info"]."' ,post_date = Now() + interval '7' hour  WHERE post_id = '".$_POST["post_id"]."' ";

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