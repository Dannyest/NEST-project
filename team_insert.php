<?php
  include("config.php");	
  include("con_db.php");
  	$name = $_POST['person_name'];
	$desc = $_POST['person_desc'];
	$status = $_POST['status'];

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
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "NEST/images" . $_FILES["file"]["name"]);
	mysql_query("INSERT INTO team (image_name) VALUES ('".$FILES['file']['name']."')");
      }
    }
  }
else
  {
  echo "Invalid file";
  }
	header("Location: index.php?id=10");
?>