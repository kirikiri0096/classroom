		<?php
			include("../config.php");
			include('../session.php');
			$strSQL = "INSERT INTO post (post_info,post_date,class_code) VALUES ('".$_POST["post_info"]."',Now() + interval '7' hour ,'".$ssclass."' ) ";
			$objQuery = mysqli_query($objCon,$strSQL);
			echo "<meta http-equiv ='refresh'content='0;URL=t_post.php'>";
			mysqli_close($objCon);
		?>