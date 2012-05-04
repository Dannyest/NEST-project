<?php
  include("config.php");  
  include("con_db.php");
  $siteid = $_POST['site_id'];
  $header = $_POST['header'];
  $content = $_POST['content'];
	$author = $_POST['author'];
  
	$sql = "INSERT INTO gen_info (site_id, header, content, author) VALUES ('$siteid', '$header', '$content', '$author')";
	$result = mysql_query($sql);



  if($result)
	{
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?id=11\">";
	}

	else 
	{
		echo "ERROR";
	}	
?>