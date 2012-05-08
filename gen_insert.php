<?php
  include("config.php");	
  include("con_db.php");
  	$site_id = $_POST['site_id'];
  	$header = $_POST['header'];
	$content = $_POST['content'];
	$author = $_POST['author'];
      	$imgname = ($_FILES["file"]["name"]);
	 if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    if (file_exists("/home/user/public_html/NEST/images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "/home/user/public_html/NEST/images/" . $_FILES["file"]["name"]);
	mysql_query("INSERT INTO gen_info (site_id, image_name, header, content, author) VALUES ('$site_id', '$imgname', '$header', '$content', '$author')");	
      }
    }
  }
else
  {
  echo "Invalid file";
  }
	header("Location: index.php?id=11");
?>