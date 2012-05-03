<?php
  $img_id = $_GET['img_id'];
	if(isset($img_id) && is_numeric($img_id))
		{
			include("../con/update_db.php");
			$imageQuery = "SELECT image, image_type FROM images WHERE image_id=$img_id";
			$queryResult = mysql_query($imageQuery) or die("Invalid query: " . mysql_error());
			if(mysql_num_rows($queryResult) > 0)
			{
				$imageType = mysql_result($queryResult, 0, "image_type");
				$headerString = "Content-type: " . $imageType;
				// set the header for the image
				header($headerString);
				echo mysql_result($queryResult, 0, "image");
			}
			// close the db link
			mysql_close($con);
		}
?>