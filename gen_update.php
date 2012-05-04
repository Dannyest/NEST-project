<?php
  include("config.php");
  include("con_db.php");
  $header = $_POST['header'];
  $content = $_POST['content'];
  $author = $_POST['author'];
  $id = $_POST['article_id'];
  $sql = "UPDATE gen_info SET header='$header', content='$content', author='$author' WHERE article_id='$id'";
	$result = mysql_query($sql);
	if ($result)
		{
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?id=10\">";
		}
		
	else 
		{
			echo "ERROR";
		}
	mysql_close($con)
?>